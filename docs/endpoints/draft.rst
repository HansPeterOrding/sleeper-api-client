.. index::
    single: Drafts

###############
Draft endpoints
###############

Returns information on fantasy drafts.

*********
Get draft
*********

Description
===========

Returns one draft identified by its Sleeper ID

URL
===

:samp:`https://api.sleeper.app/v1/draft/{<draft_id>}`

Parameters
----------

:draft_id: The sleeper draft ID to identify the draft

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
    * Returns the draft with ID 1234567890
    */
   $draft = $client->draft()->get('1234567890');

****************
List draft picks
****************

Description
===========

Returns list of draft picks in the given draft.

URL
===

:samp:`https://api.sleeper.app/v1/draft/{<draft_id>}/picks`

Parameters
----------

:draft_id: The sleeper draft ID to identify the draft

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperDraftPick``
``HansPeterOrding\SleeperApiClient\Dto\SleeperDraftPickMetadata``

Example
=======

 .. code-block:: php
   :linenos:

   <?php

   /*
    * Returns draft picks in draft 1234567890
    */
   $draft = $client->draft()->listPicks('1234567890');

*****************
List traded picks
*****************

Description
===========

Returns list of traded draft picks in the given draft.

URL
===

:samp:`https://api.sleeper.app/v1/draft/{<draft_id>}/traded_picks`

Parameters
----------

:draft_id: The sleeper draft ID to identify the draft

Data transfer object
====================

``HansPeterOrding\SleeperApiClient\Dto\SleeperTradedPick``

Example
=======

 .. code-block:: php
   :linenos:

   <?php

   /*
    * Returns traded picks in draft 1234567890
    */
   $draft = $client->draft()->listTradedPicks('1234567890');