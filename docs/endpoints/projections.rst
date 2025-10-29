.. index::
   single: Projections

####################
Projection endpoints
####################

Returns information on projections for players.

****************
List projections
****************

Description
===========

Returns list of player projections for the given search data.

URL
===

:samp:`https://api.sleeper.com/projections/nfl/{<season>}[/{<week>}]?season_type={<season_type>}[&position={<position>}][&order_by={<order_by>}]`

Parameters
----------

:season: List projections for this season.
:week: Optional. List projections for this week.
:season_type: List projections for ``regular``, ``post``, ``pre`` or ``off`` season type.
:position: Optional. An array of positions to list projections for.
:order_by: Optional. The field to order the projections by. Default is ``pts_std``, you can lookup possible values in /src/ApiClient/Endpoints/AbstractEndpoints.php. All constants prefixed by ``ORDER_BY_`` can be used.

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerProjection``
``HansPeterOrding\SleeperApiClient\Dto\SleeperStats``
``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer``

Example
=======

TBD: Check other problems in displaying incl. TOC
.. code-block:: php
   :linenos:

   <?php

   use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

   /*
    * Returns projections for regular season 2022 week 1 for QB, RB and WR, ordered by ADP in dynasty with STD scoring
    */
   $draft = $client->projections()->list(
       2022,
       AbstractEndpoint::SEASON_TYPE_REGULAR,
       1,
       [
           AbstractEndpoint::POSITION_QB,
           AbstractEndpoint::POSITION_WR,
           AbstractEndpoint::POSITION_RB
       ],
       AbstractEndpoint::ORDER_BY_ADP_DYNASTY_STD
   );

*************************
Get projection for player
*************************

Description
===========

Returns a players projection for the given search data for a season.

URL
===

:samp:`https://api.sleeper.com/projections/nfl/player/{<player_id>}?season={<season>}&season_type={<season_type>}&grouping=season`

Parameters
----------

:player_id: Return projection for this player.
:season: Return projection for this season.
:season_type: Return projection for ``regular``, ``post``, ``pre`` or ``off`` season type.

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerProjection``
``HansPeterOrding\SleeperApiClient\Dto\SleeperStats``
``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer``

Example
=======

 .. code-block:: php
   :linenos:

   <?php

   use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

   /*
    * Returns projection for Aaron Rodgers for complete regular season 2022
    */
   $draft = $client->projections()->getForPlayer(
       86,
       2022,
       AbstractEndpoint::SEASON_TYPE_REGULAR
   );

*********************************
Get weekly projections for player
*********************************

Description
===========

Returns a list of player projections for the given search data for every week of a season.

URL
===

:samp:`https://api.sleeper.com/projections/nfl/player/{<player_id>}?season={<season>}&season_type={<season_type>}&grouping=week`

Parameters
----------

:player_id: List projections for this player.
:season: List projections for every week of this season.
:season_type: List projections for ``regular``, ``post``, ``pre`` or ``off`` season type.

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerProjection``
``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerStats``
``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer``

Example
=======

 .. code-block:: php
   :linenos:

   <?php

   use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

   /*
    * Returns list of projections for Aaron Rodgers for week 1 to 18 of regular season 2022
    */
   $draft = $client->projections()->getWeeklyForPlayer(
       86,
       2022,
       AbstractEndpoint::SEASON_TYPE_REGULAR
   );