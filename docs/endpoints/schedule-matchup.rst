.. index::
   single: ScheduleMatchup

#########################
ScheduleMatchup endpoints
#########################

Returns information on real NFL matchups

**********************
List schedule matchups
**********************

Description
===========

Returns the list of real NFL matchups for the given season type and season.

URL
===

``https://api.sleeper.com/schedule/nfl/<season_type>/<season>``
:samp: `https://api.sleeper.com/schedule/nfl/{season_type}/{season}
\https://api.sleeper.com/schedule/nfl/<season_type>/<season>

Parameters
----------

:season_type: List schedule matchups for 'regular', 'post', 'pre' or 'off' season type.
:season: List schedule matchups for this season.

Data transfer objects
=====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperScheduleMatchup[]``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

   /*
    * Returns the schedule matchups of the regular season of NFL season 2022
    */
   $players = $client->scheduleMatchup->list(
      2022,
      AbstractEndpoint::SEASON_TYPE_REGULAR
   );
