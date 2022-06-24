Introduction
============

This library was created to enable coders in the fantasy football bubble to work easily with the data provided by Sleeper. Therefore, it introduces an api client to call all existing endpoints of the sleeper api and transform the resulting JSON data into [data transfer objects](02-dto.md). The JSON data is [mapped](field_mapping.md) to object attributes so that you can use getters and setters to work with the data.

If you have not heard of sleeper api so far, it is a good idea to take a closer look to the [project page](https://docs.sleeper.app/).