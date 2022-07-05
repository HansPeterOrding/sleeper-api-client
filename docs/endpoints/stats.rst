.. index::
   single: Stats

###############
Stats endpoints
###############

Returns information on stats for players.

**********
List stats
**********

Description
===========

Returns list of player stats for the given search data.

URL
===

https://api.sleeper.com/stats/nfl/<season>[/<week>]?season_type=<season_type>[&position=<position>][&order_by=<order_by>]

Parameters
----------

:season: List stats for this season.
:week: Optional. List stats for this week.
:season_type: List stats for ``regular``, ``post``, ``pre`` or ``off`` season type.
:position: Optional. An array of positions to list stats for.
:order_by: Optional. The field to order the stats by. Default is ``pts_std``, you can lookup possible values in /src/ApiClient/Endpoints/AbstractEndpoints.php. All constants prefixed by ``ORDER_BY_`` can be used.

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerStats[]``

Example
=======

.. code-block:: php
   :linenos:

    use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

    /*
     * Returns stats for regular season 2022 week 1 for QB, RB and WR, ordered by points in HPPR scoring
     */
    $draft = $client->stats()->list(
        2022,
        AbstractEndpoint::SEASON_TYPE_REGULAR,
        1,
        [
            AbstractEndpoint::POSITION_QB,
            AbstractEndpoint::POSITION_WR,
            AbstractEndpoint::POSITION_RB
        ],
        AbstractEndpoint::ORDER_BY_PTS_HALF_PPR
    );

********************
Get stats for player
********************

Description
===========

Returns a players stats for the given search data for a season.

URL
===

https://api.sleeper.com/stats/nfl/player/<player_id>?season=<season>&season_type=<season_type>&grouping=season

Parameters
----------

:player_id: Return stats for this player.
:season: Return stats for this season.
:season_type: Return stats for ``regular``, ``post``, ``pre`` or ``off`` season type.

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerStats``

Example
=======

.. code-block:: php
   :linenos:

    use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

    /*
     * Returns stats for Aaron Rodgers for complete regular season 2022
     */
    $draft = $client->stats()->getForPlayer(
        86,
        2022,
        AbstractEndpoint::SEASON_TYPE_REGULAR
    );

***************************
Get weekly stats for player
***************************

Description
===========

Returns a list of player stats for the given search data for every week of a season.

URL
===

https://api.sleeper.com/stats/nfl/player/<player_id>?season=<season>&season_type=<season_type>&grouping=week

Parameters
----------

:player_id: List stats for this player.

:season: List stats for every week of this season.

:season_type: List stats for ``regular``, ``post``, ``pre`` or ``off`` season type.

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerStats[]``

Example
=======

.. code-block:: php
   :linenos:

    use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

    /*
     * Returns list of stats for Aaron Rodgers for week 1 to 18 of regular season 2022
     */
    $draft = $client->stats()->getWeeklyForPlayer(
        86,
        2022,
        AbstractEndpoint::SEASON_TYPE_REGULAR
    );
