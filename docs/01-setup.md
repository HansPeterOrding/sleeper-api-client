Setting up the bundle
=====================

Download the library
--------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require hans-peter-ording/sleeper-api-client
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-introduction.md)
of the Composer documentation.

Use the client
--------------

To make use of the sleeper api client, you only need a PSR-18 compatible HTTP client that you inject into the sleeper api client object on instanciation:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new HansPeterOrding\NflFastrSymfonyBundle\NflFastrSymfonyBundle(),
        ];

        // ...
    }
}
```

You can now use the sleeper api client to request resources from the sleeper api: