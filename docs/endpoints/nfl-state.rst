.. index::
   single: NflState

##################
NflState endpoints
##################

Returns information on the current state of the NFL season like the current week, various dates or the current season phase (e.g. in-season, off-season, etc.).

*************
Get NFL state
*************

Description
===========

Returns the current state of the NFL season.

URL
===

https://api.sleeper.app/v1/state/nfl

Data transfer objects
=====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperNflState``

Example
=======

.. code-block:: php
   :linenos:

   <?php
   /*
    * Returns the current state of the NFL season
    */
   $players = $client->nflState()->get();
