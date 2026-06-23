.. index::
   single: Error handling

##############
Error handling
##############

The client turns ESPN HTTP error responses into typed exceptions, so you can
catch exactly the failure modes you care about.

.. contents:: Table of contents
   :depth: 2
   :local:

******************
How errors surface
******************

Every request runs through a single response-code check. Any response with a
status code of 400 or above is converted into a dedicated exception carrying
the originating request and the response. Successful responses (2xx/3xx) are
returned normally.

A special case: when ESPN returns the literal body ``null`` (which it does for
some "exists but empty" resources), the client does **not** throw. Instead the
``get*`` method returns ``null`` and ``decodeJson`` returns an empty array.
This is why DTO results are always nullable.

******************
Exception types
******************

The following exceptions live in
``HansPeterOrding\EspnApiClient\ApiClient\Exception``. Each is thrown for a
specific status code, with two catch-all ranges for anything not matched
explicitly.

==================== ============= ==================================================
Status code          Exception     Typical meaning
==================== ============= ==================================================
400                  ``BadRequestException``    Malformed request / bad parameters
401                  ``UnauthorizedException``  Authentication required
403                  ``ForbiddenException``     Access denied
404                  ``NotFoundException``      Resource does not exist
400–499 (other)      ``ClientErrorException``   Any other client-side error
500–599              ``ServerErrorException``   ESPN-side failure
==================== ============= ==================================================

Each exception is created through a static
``::create($request, $response)`` factory and retains both objects, so you can
inspect the URL that failed and the raw response when handling it.

******************
Catching errors
******************

Catch the most specific exception you need, and fall back to broader types as
required.

.. code-block:: php

    use HansPeterOrding\EspnApiClient\ApiClient\Exception\NotFoundException;
    use HansPeterOrding\EspnApiClient\ApiClient\Exception\ServerErrorException;

    try {
        $team = $client->seasons()->teams()->get(2025, 99999);
    } catch (NotFoundException $e) {
        // The team id does not exist for that season
        return null;
    } catch (ServerErrorException $e) {
        // ESPN is having a bad day — a retry later may succeed
        throw $e;
    }

******************
Transient vs. permanent failures
******************

When you build automated, repeated imports on top of this client, it helps to
distinguish failures that a retry might fix from those it never will:

* **Transient** — ``ServerErrorException`` (5xx) and network-level errors
  thrown by the underlying PSR-18 client. Retrying later is reasonable.
* **Permanent** — ``NotFoundException`` (404), ``BadRequestException`` (400),
  and the other 4xx errors. Retrying the identical request will not help.

The client itself does not retry; it surfaces the exception and lets the
caller decide. (The companion ``espn-api-symfony-bundle`` builds a retry
policy on exactly this distinction.)

******************
Network-level errors
******************

Errors that occur *before* an HTTP response exists — DNS failures, connection
timeouts, TLS problems — are raised by the PSR-18 client you injected, as
``Psr\Http\Client\ClientExceptionInterface``. Catch that interface if you want
to handle connectivity problems separately from ESPN HTTP errors:

.. code-block:: php

    use Psr\Http\Client\ClientExceptionInterface;

    try {
        $season = $client->seasons()->get(2025);
    } catch (ClientExceptionInterface $e) {
        // Could not even reach ESPN
    }

**********
Read next
**********

* :doc:`extending` — customizing the client for your own needs
