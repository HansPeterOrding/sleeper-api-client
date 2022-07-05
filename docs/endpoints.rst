#########
Endpoints
#########

Sleeper API serves a lot of endpoints. This package groups those endpoints into categories each of which can be called via dedicated ``SleeperApiClient`` methods.

Sleepers own documentation only describes a subset of all available endpoints. As this could be intended, **there is no guarantee for all other endpoints to work properly and as expected in the future**.

The following endpoints are implemented:

* :doc:`NflState </endpoints/nfl-state>`
* :doc:`ScheduleMatchup </endpoints/schedule-matchup>`
* :doc:`User </endpoints/user>`
* :doc:`Player </endpoints/player>`
* :doc:`League </endpoints/league>`
* :doc:`Draft </endpoints/draft>`
* :doc:`Projections </endpoints/projections>`
* :doc:`Stats </endpoints/stats>`

.. Hidden TOC

.. toctree::
   :maxdepth: 2
   :glob:
   :hidden:

   endpoints/*