.. index::
   single: User

##############
User endpoints
##############

Returns information on sleeper users.

********
Get user
********

Returns one user identified by his Sleeper ID or username

URL
===

https://api.sleeper.app/v1/user/<user_id_or_username>

Parameters
----------

:user_id_or_username: The sleeper user ID or username to identify the user

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperUser``

Example
=======

    ...code-block:: php
        /**
         * Returns player HansPeterOrding
         */
        $players = $client->user()->get('HansPeterOrding');

************
List leagues
************

Description
===========

Returns all leagues a user is part of.

URL
===

https://api.sleeper.app/v1/user/<user_id>/leagues/nfl/<season>

Parameters
----------

:user_id: The sleeper user ID to identify the user
:season: The season to lookup leagues for the given user

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperLeague[]``

Example
=======

    ...code-block:: php
        /*
         * Returns all leagues for HansPeterOrding in 2022
         */
        $players = $client->user()->listLeagues(571115199303487488, 2022);

***********
List drafts
***********

Description
===========

Returns all drafts a user is part of.

URL
===

https://api.sleeper.app/v1/user/<user_id>/drafts/nfl/<season>

Parameters
----------

:user_id: The sleeper user ID to identify the user
:season: The season to lookup drafts for the given user

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperDraft[]``

Example
=======

    ...code-block:: php
        /*
         * Returns all drafts for HansPeterOrding in 2022
         */
        $players = $client->user()->listDrafts(571115199303487488, 2022);