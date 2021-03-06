.. index::
    single: Leagues

################
League endpoints
################

Returns information on fantasy leagues.

**********
Get league
**********

Description
===========

Returns one league identified by its Sleeper ID

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}`

Parameters
----------

:league_id: The sleeper league ID to identify the league

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperLeague``
``HansPeterOrding\SleeperApiClient\Dto\SleeperLeagueSettings``
``HansPeterOrding\SleeperApiClient\Dto\SleeperLeagueScoringSettings``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns the league with id 1234567890
    */
   $draft = $client->league()->get('1234567890');

**********
List users
**********

Description
===========

Returns list of users in given league.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/users`

Parameters
----------

:league_id: The sleeper league ID to identify the league

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperUser``
``HansPeterOrding\SleeperApiClient\Dto\SleeperUserMetadata``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns users in league 1234567890
    */
   $draft = $client->league()->listUsers('1234567890');

***********
List drafts
***********

Description
===========

Returns list of drafts in given league.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/drafts`

Parameters
----------

:league_id: The sleeper league ID to identify the league

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperDraft``
``HansPeterOrding\SleeperApiClient\Dto\SleeperDraftSettings``
``HansPeterOrding\SleeperApiClient\Dto\SleeperDraftMetadata``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns drafts in league 1234567890
    */
   $draft = $client->league()->listDrafts('1234567890');

************
List rosters
************

Description
===========

Returns list of rosters in given league.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/rosters`

Parameters
----------

:league_id: The sleeper league ID to identify the league

Data transfer objects
=====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperRoster``
``HansPeterOrding\SleeperApiClient\Dto\SleeperRosterSettings``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns rosters in league 1234567890
    */
   $draft = $client->league()->listRosters('1234567890');

*********************
List playoff matchups
*********************

Description
===========

Returns list of playoff matchups in given league for the requested branch.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/{<branch>}`

Parameters
----------

:league_id: The sleeper league ID to identify the league
:branch: The branch of the playoff tree (``winners_bracket`` or ``losers_bracket``)

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayoffMatchup``
``HansPeterOrding\SleeperApiClient\Dto\SleeperPlayoffMatchupSource``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\AbstractEndpoint;

   /*
    * Returns playoff matchups from the winners bracket in league 1234567890
    */
   $draft = $client->league()->listPlayoffMatchups('1234567890', AbstractEndpoint::BRANCH_WINNERS);

*****************
List traded picks
*****************

Description
===========

Returns list of traded picks in given league.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/traded_picks`

Parameters
----------

:league_id: The sleeper league ID to identify the league

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperTradedPick``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns traded picks in league 1234567890
    */
   $draft = $client->league()->listTradedPicks('1234567890');

*****************
List transactions
*****************

Description
===========

Returns list of transactions (waiver bids, trades, drops, etc.) in given league.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/transactions/{<round>}`

Parameters
----------

:league_id: The sleeper league ID to identify the league
:round: The week to pull transactions from (Sleeper is not very consistent in naming, so here it's really called ``round``.)

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperTransaction``
``HansPeterOrding\SleeperApiClient\Dto\SleeperTransactionWaiverBudget``
``HansPeterOrding\SleeperApiClient\Dto\SleeperTransactionWaiverSettings``
``HansPeterOrding\SleeperApiClient\Dto\SleeperTransactionMetadata``
``HansPeterOrding\SleeperApiClient\Dto\SleeperTradedPick``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns transactions in league 1234567890 for week 1
    */
   $draft = $client->league()->listTransactions('1234567890', 1);

*****************
List matchups
*****************

Description
===========

Returns list of matchup in given league.

URL
===

:samp:`https://api.sleeper.app/v1/league/{<league_id>}/matchups/{<week>}`

Parameters
----------

:league_id: The sleeper league ID to identify the league
:week: The week to pull transactions from

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperMatchup``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns matchups in league 1234567890 for week 1
    */
   $draft = $client->league()->listMatchups('1234567890', 1);

