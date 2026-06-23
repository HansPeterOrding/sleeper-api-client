.. index::
   single: Contribute

##############################
Contributing to EspnApiClient
##############################

First off, thanks for taking the time to contribute!

The following is a set of guidelines for contributing to ``EspnApiClient``.
These are mostly guidelines, not rules. Use your best judgment, and feel free
to propose changes to this document in a pull request.

.. contents:: Table of contents
   :depth: 2
   :local:

***************
Code of Conduct
***************

This project and everyone participating in it is governed by the
`Symfony Code of Conduct`_. By participating, you are expected to uphold this
code. Please report unacceptable behavior to bjoern.may@gmail.com.

***************************************************************
I don't want to read this whole thing I just have a question!!!
***************************************************************

.. note::

    Please don't file an issue to ask a question. You'll get faster results by
    using the resources below.

If you have questions about the underlying data, please consult the
unofficial community documentation of the ESPN API, since ESPN does not
publish official docs for these endpoints:

* `ESPN hidden API notes (community) <https://gist.github.com/akeaswaran/b48b02f1c94f873c6655e7129910fc3b>`_

For questions about *this client* specifically, prefer a discussion thread over
an issue.

*********************
How Can I Contribute?
*********************

Reporting Bugs
==============

This section guides you through submitting a bug report for
``EspnApiClient``. Following these guidelines helps maintainers and the
community understand your report, reproduce the behavior, and find related
reports.

When you are creating a bug report, please
:ref:`include as many details as possible <client-how-do-i-submit-a-bug-report>`.

.. note::

    If you find a **Closed** issue that seems like the same thing you're
    experiencing, open a new issue and include a link to the original issue in
    the body of your new one.

.. _client-how-do-i-submit-a-bug-report:

How Do I Submit A (Good) Bug Report?
------------------------------------

Bugs are tracked as `GitHub issues`_. Create an issue on
`the repository <https://github.com/HansPeterOrding/espn-api-client>`_ and
provide the following information.

Explain the problem and include additional details to help maintainers
reproduce the problem:

* **Use a clear and descriptive title** for the issue to identify the problem.
* **Describe the exact steps which reproduce the problem** in as many details
  as possible. For example, explain how you installed ``EspnApiClient``, which
  endpoint chain you called, and with which arguments. When listing steps,
  **don't just say what you did, but explain how you did it**.
* **Provide specific examples to demonstrate the steps**. Include the endpoint
  call and the resource ids you used, or copy/pasteable snippets, in
  `Markdown code blocks`_. If an ESPN response is relevant, include the failing
  URL and (a trimmed copy of) the JSON it returned.
* **Describe the behavior you observed** and point out what exactly is the
  problem with that behavior.
* **Explain which behavior you expected to see instead and why.**

Provide more context by answering these questions:

* **Did the problem start happening recently** (e.g. after updating to a new
  version of ``EspnApiClient``) or was this always a problem?
* If the problem started happening recently, **can you reproduce the problem
  in an older version?** What's the most recent version in which the problem
  doesn't happen?
* **Can you reliably reproduce the issue?** If not, provide details about how
  often the problem happens and under which conditions it normally happens.
  Keep in mind that the ESPN API itself is occasionally inconsistent.

Include details about your configuration and environment:

* **Which version of EspnApiClient are you using?**
* **Which PHP version are you using?**
* **Which PSR-18 HTTP client and PSR-17 factories are you using**, and how did
  you wire them (auto-discovery or explicit)?

Suggesting Enhancements
=======================

This section guides you through submitting an enhancement suggestion for
``EspnApiClient``, including completely new features and minor improvements to
existing functionality.

When you are creating an enhancement suggestion, please
:ref:`include as many details as possible <client-how-do-i-submit-an-enhancement>`.

.. _client-how-do-i-submit-an-enhancement:

How Do I Submit A (Good) Enhancement Suggestion?
------------------------------------------------

Enhancement suggestions are tracked as `GitHub issues`_. Create an issue on the
repository and provide the following information:

* **Use a clear and descriptive title** for the issue to identify the
  suggestion.
* **Provide a step-by-step description of the suggested enhancement** in as
  many details as possible.
* **Provide specific examples to demonstrate the steps**. Include
  copy/pasteable snippets in `Markdown code blocks`_.
* **Describe the current behavior** and **explain which behavior you expected
  to see instead** and why.
* **Explain why this enhancement would be useful** to most ``EspnApiClient``
  users and isn't something that can or should be implemented as a separate
  package on top of the client.
* **Specify which version of EspnApiClient you're using.**

Pull Requests
=============

The process described here has several goals:

* Maintain ``EspnApiClient``'s quality
* Fix problems that are important to users
* Engage the community in working toward the best possible ``EspnApiClient``
* Enable a sustainable system for maintainers to review contributions

Please follow these steps to have your contribution considered by the
maintainers:

#. Formulate what your pull request is intended to do.
#. Follow the :ref:`styleguides <client-styleguides>`.
#. Add or update DTOs and endpoints together — a new endpoint method that
   returns a DTO should ship with that DTO in the same pull request.
#. Cover new behavior with tests where practical.

While the prerequisites above must be satisfied prior to having your pull
request reviewed, the reviewer(s) may ask you to complete additional tests or
other changes before your pull request can be ultimately accepted.

.. _client-styleguides:

***********
Styleguides
***********

Git Commit Messages
===================

* Use the present tense ("Add feature" not "Added feature")
* Use the imperative mood ("Move cursor to…" not "Moves cursor to…")
* Limit the first line to 72 characters or less
* Reference issues and pull requests liberally after the first line

PHP Styleguide
==============

Stick to:

* `PSR-1`_
* `PSR-12`_
* `PSR Naming Conventions`_
* `PSR-4 Autoloading Standard`_

In addition, follow the conventions this client already establishes:

* DTO properties are private, nullable, and exposed through typed getters and
  fluent setters.
* Links to other resources are stored as ``{name}Reference`` strings (or
  ``{name}References`` arrays), never as nested objects.
* Endpoint methods that fetch one resource are named ``get*`` and return a
  ``?Dto``; methods that fetch a list of links are named ``list*Refs`` and
  return ``string[]``.

Documentation Styleguide
========================

* Use `reStructuredText`_ and remain compatible with `Read the Docs`_.
* Every deep-dive topic lives in its own file and is linked from
  ``index.rst`` through the ``toctree``.

.. _Symfony Code of Conduct: https://symfony.com/doc/current/contributing/code_of_conduct/code_of_conduct.html
.. _GitHub issues: https://guides.github.com/features/issues/
.. _Markdown code blocks: https://help.github.com/articles/markdown-basics/#multiple-lines
.. _PSR-1: https://www.php-fig.org/psr/psr-1/
.. _PSR-12: https://www.php-fig.org/psr/psr-12/
.. _PSR Naming Conventions: https://www.php-fig.org/bylaws/psr-naming-conventions/
.. _PSR-4 Autoloading Standard: https://www.php-fig.org/psr/psr-4/
.. _reStructuredText: https://www.sphinx-doc.org/
.. _Read the Docs: https://readthedocs.org/
