#####################
Setting up the bundle
#####################

********************
Download the library
********************

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

.. code-block:: bash

   $ composer require hans-peter-ording/sleeper-api-client

This command requires you to have Composer installed globally, as explained
in the `installation chapter <https://getcomposer.org/doc/00-introduction.md>`_ of the Composer documentation.

**************
Use the client
**************

To make use of the sleeper api client, you only need to install some bundles of your choice for:

* PSR-18 compatible HTTP client (e.g. `Symfony HTTP client <https://github.com/symfony/http-client>`_)
* PSR-7 compatible library (e.g. `Nyholm PSR 7 implementation <https://github.com/Nyholm/psr7>`_)

If these prerequisites are met, you can simply use the ``SleeperApiClientFactory`` to get a fully qualified instance of ``SleeperApiClient``:

.. code-block:: php
   :linenos:

   <?php
   // MyCustomClientUsage.php

   use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClient;
   use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientFactory;
   use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;

   class SleeperApiClientUsage
   {
      public function initSleeperApiClient(): SleeperApiClientInterface
      {
         $sleeperApiClient = (new SleeperApiClientFactory())->getSleeperApiClient();

         return $sleeperApiClient;
      }
   }

You can now use the ``SleeperApiClient`` to request resources from the sleeper api:

.. code-block:: php
   :linenos:

   // MyCustomClientUsage.php

   use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClient;
   use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientFactory;
   use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
   use HansPeterOrding\SleeperApiClient\Dto\SleeperDraft;

   class SleeperApiClientUsage
   {
      public function initSleeperApiClient(): SleeperApiClientInterface
      {
         $sleeperApiClient = (new SleeperApiClientFactory())->getSleeperApiClient();

         return $sleeperApiClient;
      }

      public function getMyDrafts(): array
      {
         $client = $this->initSleeperApiClient();

         return $client->user()->listDrafts('my-sleeper-user-id', 2022);
      }
   }