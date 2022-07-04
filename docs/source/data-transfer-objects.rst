#####################
Data transfer objects
#####################

Sleeper API delivers JSON data. To enable object oriented work with this data, the ``SleeperApiClient`` introduces data transfer objects (DTOs) for every piece of data available via Sleeper API.

All of these DTOs are more or less one to one projections of the Sleeper data to objects with some minor adjustments:

* All properties are camel case whereas the original data comes in snake case
* Properties containing date strings are converted to ``DateTime`` objects
* Properties containing timestamps are left as integers (or string if Sleeper defines so)

To achieve this conversion, the ``SleeperApiClient`` makes use of `Symfony serializer component`_. This component and all subsequently needed packages are automatically installed as dependencies when the package itself is installed.

_`Symfony serializer component`: https://symfony.com/doc/current/components/serializer.html