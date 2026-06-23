.. index::
   single: Endpoints

#########
Endpoints
#########

Endpoints are the primary way you interact with the ESPN API through this
client. They are fluent, chainable, and mirror the nesting of the ESPN URL
hierarchy.

.. contents:: Table of contents
   :depth: 2
   :local:

*****************
How endpoints work
*****************

Every endpoint is reached from the ``EspnApiClient`` instance through a
method named after the resource. Calling that method returns an endpoint
object; calling a method on *that* object either fetches data or descends one
level deeper into the hierarchy.

.. code-block:: php

    // One level: a list of all venues
    $venueRefs = $client->venues()->listRefs();

    // Two levels: the teams that belong to a season
    $teamRefs = $client->seasons()->teams()->listRefs(2025);

    // Four levels: a single competitor in a competition of an event
    $competitor = $client->events()
        ->competitions()
        ->competitors()
        ->get(401773010, 401773010, 12);

The chain itself performs no requests. Only the terminal ``get*`` /
``list*`` call triggers an HTTP call. Intermediate calls like
``->competitions()`` are cheap object constructions, so you can build and
reuse them freely.

***************
Two kinds of calls
***************

Every endpoint exposes two families of terminal methods.

``get*()`` — fetch one resource
===============================

A ``get`` call requests a single resource by its identifiers and returns a
fully populated DTO, or ``null`` if ESPN has no such resource.

.. code-block:: php

    $team = $client->seasons()->teams()->get(2025, 12);

    if (null === $team) {
        // ESPN returned an empty body for this resource
    }

``listRefs*()`` — fetch a list of references
============================================

ESPN list endpoints do not return full objects. They return a paginated
envelope whose ``items`` array contains ``$ref`` links. The client extracts
those links and returns them as a plain array of URL strings. You then fetch
each referenced resource individually.

.. code-block:: php

    $athleteRefs = $client->seasons()->athletes()->listRefsForTeam(2025, 12);

    // $athleteRefs is now:
    // [
    //   'http://sports.core.api.espn.com/v2/.../athletes/2578570?...',
    //   'http://sports.core.api.espn.com/v2/.../athletes/3045147?...',
    //   ...
    // ]

This deliberate split keeps list calls cheap and lets you decide how many
referenced resources you actually want to resolve. See :doc:`references` for
how to turn a reference string back into a typed DTO.

************************
Working with references
************************

Because list calls and many DTO properties return reference *strings* rather
than objects, a common pattern is to list references and then resolve each one:

.. code-block:: php

    $positionRefs = $client->positions()->listRefs();

    foreach ($positionRefs as $ref) {
        // Resolve the numeric id from the reference and fetch the position
        // (see "References" for a helper-free way to do this)
        $position = $client->get(
            $client->getUriFactory()->createUri($ref),
            \HansPeterOrding\EspnApiClient\Dto\EspnPosition::class
        );

        echo $position->getDisplayName();
    }

The ``EspnApiClient::get()`` method accepts any ``UriInterface`` plus the DTO
class to deserialize into, which makes resolving a raw reference string
straightforward.

***************
Base URIs
***************

ESPN exposes two hosts. The client uses the *sports core* API by default,
which is the richly linked, resource-oriented API that powers everything in
this client:

============================ =================================================================
Constant                     Value
============================ =================================================================
``BASE_URI_SPORTS_CORE``     ``https://sports.core.api.espn.com/v2/sports/football/leagues/nfl/``
``BASE_URI_SITE``            ``https://site.api.espn.com/apis/site/v2/sports/football/nfl/``
============================ =================================================================

Both constants live on ``EspnApiClientInterface``.

******************
Endpoint reference
******************

The table below lists every endpoint chain and its terminal methods. The
chain column shows how to reach the endpoint from the client.

Top-level resources
===================

============================================= =========================================== ====================================
Chain                                         Method                                      Returns
============================================= =========================================== ====================================
``->seasons()``                               ``get(int $year)``                          ``?EspnSeason``
``->seasons()``                               ``listRefs()``                              ``string[]``
``->venues()``                                ``get(int $venueId)``                       ``?EspnVenue``
``->venues()``                                ``listRefs()``                              ``string[]``
``->franchises()``                            ``get(int $franchiseId)``                   ``?EspnFranchise``
``->franchises()``                            ``listRefs()``                              ``string[]``
``->positions()``                             ``get(int $positionId)``                    ``?EspnPosition``
``->positions()``                             ``listRefs()``                              ``string[]``
``->events()``                                ``get(int $eventId)``                       ``?EspnEvent``
``->events()``                                ``listRefsForWeek(int $year, int $typeId, int $weekNumber)`` ``string[]``
``->athletes()``                              ``contracts()``                             ``EspnContracts``
============================================= =========================================== ====================================

Season hierarchy
================

==================================================================== =========================================== ====================================
Chain                                                                Method                                      Returns
==================================================================== =========================================== ====================================
``->seasons()->seasonTypes()``                                       ``get(int $year, int $typeId)``             ``?EspnSeasonType``
``->seasons()->seasonTypes()``                                       ``listRefs(int $year)``                     ``string[]``
``->seasons()->seasonTypes()->seasonGroups()``                       ``get(int $year, int $typeId, int $groupId)`` ``?EspnSeasonGroup``
``->seasons()->seasonTypes()->seasonGroups()``                       ``listRefs(int $year, int $typeId)``        ``string[]``
``->seasons()->seasonTypes()->seasonGroups()``                       ``listChildRefs(int $year, int $typeId, int $groupId)`` ``string[]``
``->seasons()->seasonTypes()->seasonGroups()``                       ``listRefsForTeam(int $year, int $typeId, int $teamId)`` ``string[]``
``->seasons()->seasonTypes()->seasonGroups()->standings()``          ``getAsArray(int $year, int $typeId, int $groupId, int $standingId)`` ``array``
``->seasons()->seasonTypes()->seasonGroups()->standings()``          ``listRefs(int $year, int $typeId, int $groupId)`` ``string[]``
``->seasons()->seasonTypes()->weeks()``                              ``get(int $year, int $typeId, int $weekNumber)`` ``?EspnWeek``
``->seasons()->seasonTypes()->weeks()``                              ``listRefs(int $year, int $typeId)``        ``string[]``
==================================================================== =========================================== ====================================

Teams, athletes, coaches
========================

============================================= ==================================================================== ====================================
Chain                                         Method                                                               Returns
============================================= ==================================================================== ====================================
``->seasons()->teams()``                      ``get(int $year, int $teamId)``                                      ``?EspnTeam``
``->seasons()->teams()``                      ``getForSeasonGroup(int $year, int $typeId, int $groupId, int $teamId)`` ``?EspnTeam``
``->seasons()->teams()``                      ``listRefs(int $year)``                                              ``string[]``
``->seasons()->teams()``                      ``listRefsForSeasonGroup(int $year, int $typeId, int $groupId)``     ``string[]``
``->seasons()->teams()->records()``           ``get(int $year, int $typeId, int $teamId, int $recordId)``          ``?EspnRecord``
``->seasons()->teams()->records()``           ``getForGroup(int $year, int $typeId, int $groupId, int $teamId, int $recordId)`` ``?EspnRecord``
``->seasons()->teams()->records()``           ``listRefs(int $year, int $typeId, int $teamId)``                   ``string[]``
``->seasons()->teams()->notes()``             ``listForTeam(int $teamId)``                                         ``EspnNote[]``
``->seasons()->teams()->injuries()``          ``listRefsForTeam(int $teamId)``                                     ``string[]``
``->seasons()->athletes()``                   ``get(int $year, int $athleteId)``                                   ``?EspnAthlete``
``->seasons()->athletes()``                   ``listRefs(int $year)``                                              ``string[]``
``->seasons()->athletes()``                   ``listRefsForTeam(int $year, int $teamId)``                          ``string[]``
``->seasons()->athletes()->contracts()``      ``get(int $athleteId, int $seasonYear)``                            ``?EspnContract``
``->seasons()->athletes()->notes()``          ``listForAthlete(int $year, int $athleteId)``                        ``EspnNote[]``
``->seasons()->athletes()->injuries()``       ``get(int $year, int $athleteId, int $injuryId)``                   ``?EspnInjury``
``->seasons()->athletes()->injuries()``       ``listRefs(int $year, int $athleteId)``                             ``string[]``
``->seasons()->athletes()->injuries()``       ``listRefsForTeam(int $teamId)``                                     ``string[]``
``->seasons()->coaches()``                    ``get(int $year, int $coachId)``                                     ``?EspnCoach``
``->seasons()->coaches()``                    ``listRefs(int $year)``                                              ``string[]``
``->seasons()->coaches()``                    ``listRefsForTeam(int $year, int $teamId)``                          ``string[]``
============================================= ==================================================================== ====================================

Events, competitions, scoring
=============================

============================================================= =========================================================== ====================================
Chain                                                         Method                                                      Returns
============================================================= =========================================================== ====================================
``->events()->competitions()``                                ``get(int $eventId, int $competitionId)``                   ``?EspnCompetition``
``->events()->competitions()``                                ``listRefs(int $eventId)``                                  ``string[]``
``->events()->competitions()->status()``                      ``get(int $eventId, int $competitionId)``                   ``?EspnCompetitionStatus``
``->events()->competitions()->competitors()``                 ``get(int $eventId, int $competitionId, int $competitorId)`` ``?EspnCompetitor``
``->events()->competitions()->competitors()``                 ``listRefs(int $eventId, int $competitionId)``              ``string[]``
``->events()->competitions()->competitors()->scores()``       ``get(int $eventId, int $competitionId, int $competitorId)`` ``?EspnScore``
``->events()->competitions()->officials()``                   ``get(int $eventId, int $competitionId, int $officialId)``   ``?EspnOfficial``
``->events()->competitions()->officials()``                   ``listRefs(int $eventId, int $competitionId)``              ``string[]``
============================================================= =========================================================== ====================================

.. note::

    A few endpoints have shape-specific helpers. ``records()`` and
    ``teams()`` provide *group-scoped* variants (``getForGroup``,
    ``getForSeasonGroup``) because ESPN exposes the same resource under both a
    team-scoped and a group-scoped URL. ``standings()`` returns raw arrays via
    ``getAsArray`` rather than a DTO, because standings are consumed as a feed
    of record references rather than a standalone entity.

**********
Read next
**********

* :doc:`dtos` — the objects returned by ``get*`` calls
* :doc:`references` — how to resolve the strings returned by ``list*`` calls
