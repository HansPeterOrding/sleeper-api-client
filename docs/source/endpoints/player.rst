.. index::
   single: Player

################
Player endpoints
################

Returns information on actual NFL players.

************
List players
************

Description
===========

Returns all NFL players known to Sleeper with a lot of base data.

URL
===

https://api.sleeper.app/v1/players/nfl

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer[]``

Example
=======

    ...code-block:: php
        /*
         * Returns all players known to Sleeper
         */
        $players = $client->player()->list();

*********************
List trending players
*********************

Description
===========

Returns a number of NFL players that are currently raising or falling the most in rosters over a given time period.

URL
===

https://api.sleeper.app/v1/players/nfl/trending/<type>?lookback_hours=<lookback_hours>&limit=<limit>

Parameters
----------

:type: Defines if the trend is raising ('ADD') or falling ('DROP')
:lookback_hours: The number of hours to look into for changes in rosters
:limit: Max number of returned players

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer[]``

Example
=======

    ...code-block:: php
        use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

        /**
         * Returns 100 most added players in the last 72 hours
         */
        $players = $client->player()->trending(
            AbstractEndpoint::TRENDING_TYPE_ADD,
            72,
            100
        );

***************************************
Research player ownership and rostering
***************************************

Returns a list of objects that inform about the current number of ownership of each player and the current number of rostering of each player.

URL
===

https://api.sleeper.com/players/nfl/research/<season_type>/<season>[/<week>]

Parameters
----------

:season_type: Lookup players ownership and rostering for 'regular', 'post', 'pre' or 'off' season type.
:season: 4 digit season year to look up (e.g. 2022)
:week: Optional. 1 or 2 digit week number to look up (e.g. 12)

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperResearchPlayer``

Example
=======

    ...code-block:: php
        use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

        /**
         * Returns ownership and rostering of all players for season 2021 in week one of the regular season
         */
        $players = $client->player()->research(
            2021,
            AbstractEndpoint::SEASON_TYPE_REGULAR,
            1
        );

**********
Get player
**********

Returns one player identified by his Sleeper ID

URL
===

https://api.sleeper.app/v1/players/nfl/<player_id>

Parameters
----------

:player_id: The sleeper player ID to identify the player

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer``

Example
=======

    ...code-block:: php
        /**
         * Returns Aaron Rodgers
         */
        $players = $client->player()->get(86);

***************
Get depth chart
***************

As teams are assumed players in sleeper, this endpoint is also grouped into Players. The endpoint returns information on the deptch chart of the given actual NFL team.

URL
===

https://api.sleeper.com/players/nfl/<team_abbreviation>/depth_chart

Parameters
----------

:team_abbreviation: 2 to 3 letter team abbreviation (e.g. LAR, GB, etc.)

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperDepthChart``

Example
=======

    ...code-block:: php
        use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

        /**
         * Returns current depth chart of Green Bay Packers
         */
        $players = $client->player()->depthChart('GB');