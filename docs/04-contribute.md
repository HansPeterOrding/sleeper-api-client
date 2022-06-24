# Contributing to SleeperApiClient

First off, thanks for taking the time to contribute!

The following is a set of guidelines for contributing to SleeperApiClient. These are mostly guidelines, not rules. Use your best judgment, and feel free to propose changes to this document in a pull request.

#### Table Of Contents

[Code of Conduct](#code-of-conduct)

[I don't want to read this whole thing, I just have a question!!!](#i-dont-want-to-read-this-whole-thing-i-just-have-a-question)

[How Can I Contribute?](#how-can-i-contribute)
* [Reporting Bugs](#reporting-bugs)
* [Suggesting Enhancements](#suggesting-enhancements)
* [Pull Requests](#pull-requests)

[Styleguides](#styleguides)
* [Git Commit Messages](#git-commit-messages)
* [PHP Styleguide](#php-styleguide)
* [Documentation Styleguide](#documentation-styleguide)

## Code of Conduct

This project and everyone participating in it is governed by the [Symfony Code of Conduct](https://symfony.com/doc/current/contributing/code_of_conduct/code_of_conduct.html). By participating, you are expected to uphold this code. Please report unacceptable behavior to [bjoern.may@gmail.com](mailto:bjoern.may@gmail.com).

## I don't want to read this whole thing I just have a question!!!

> **Note:** Please don't file an issue to ask a question. You'll get faster results by using the resources below.

If you have questions on the underlying data, please use the official docs of Sleeper:

* [Browse API docs](https://docs.sleeper.app/)

## How Can I Contribute?

### Reporting Bugs

This section guides you through submitting a bug report for SleeperApiClient. Following these guidelines helps maintainers and the community understand your report, reproduce the behavior, and find related reports.

When you are creating a bug report, please [include as many details as possible](#how-do-i-submit-a-good-bug-report).

> **Note:** If you find a **Closed** issue that seems like it is the same thing that you're experiencing, open a new issue and include a link to the original issue in the body of your new one.

#### How Do I Submit A (Good) Bug Report?

Bugs are tracked as [GitHub issues](https://guides.github.com/features/issues/). Create an issue on [the repository](https://github.com/HansPeterOrding/sleeper-api-client) and provide the following information in your report.

Explain the problem and include additional details to help maintainers reproduce the problem:

* **Use a clear and descriptive title** for the issue to identify the problem.
* **Describe the exact steps which reproduce the problem** in as many details as possible. For example, start by explaining how you installed SleeperApiClient, which command exactly you used in the terminal, or what you did otherwise. When listing steps, **don't just say what you did, but explain how you did it**.
* **Provide specific examples to demonstrate the steps**. Include links to files or GitHub projects, or copy/pasteable snippets, which you use in those examples. If you're providing snippets in the issue, use [Markdown code blocks](https://help.github.com/articles/markdown-basics/#multiple-lines).
* **Describe the behavior you observed after following the steps** and point out what exactly is the problem with that behavior.
* **Explain which behavior you expected to see instead and why.**
* **Include screenshots** which show you following the described steps and clearly demonstrate the problem.

Provide more context by answering these questions:

* **Did the problem start happening recently** (e.g. after updating to a new version of SleeperApiClient) or was this always a problem?
* If the problem started happening recently, **can you reproduce the problem in an older version of SleeperApiClient?** What's the most recent version in which the problem doesn't happen?
* **Can you reliably reproduce the issue?** If not, provide details about how often the problem happens and under which conditions it normally happens.

Include details about your configuration and environment:

* **Which version of SleeperApiClient are you using?**
* **What's the name and version of the OS you're using**?
* **Are you running SleeperApiClient in a virtual machine?** If so, which VM software are you using and which operating systems and versions are used for the host and the guest?
* **Can you describe your project setup**? Which symfony version are you using? Which other components are required? Which PHP version are you using?

### Suggesting Enhancements

This section guides you through submitting an enhancement suggestion for SleeperApiClient, including completely new features and minor improvements to existing functionality. Following these guidelines helps maintainers and the community understand your suggestion :pencil: and find related suggestions :mag_right:.

When you are creating an enhancement suggestion, please [include as many details as possible](#how-do-i-submit-a-good-enhancement-suggestion).

#### How Do I Submit A (Good) Enhancement Suggestion?

Enhancement suggestions are tracked as [GitHub issues](https://guides.github.com/features/issues/). Create an issue on that repository and provide the following information:

* **Use a clear and descriptive title** for the issue to identify the suggestion.
* **Provide a step-by-step description of the suggested enhancement** in as many details as possible.
* **Provide specific examples to demonstrate the steps**. Include copy/pasteable snippets which you use in those examples, as [Markdown code blocks](https://help.github.com/articles/markdown-basics/#multiple-lines).
* **Describe the current behavior** and **explain which behavior you expected to see instead** and why.
* **Include screenshots** which help you demonstrate the steps or point out the part of SleeperApiClient which the suggestion is related to.
* **Explain why this enhancement would be useful** to most SleeperApiClient users and isn't something that can or should be implemented as a project extension.
* **Specify which version of SleeperApiClient you're using.**

### Pull Requests

The process described here has several goals:

- Maintain SleeperApiClient's quality
- Fix problems that are important to users
- Engage the community in working toward the best possible SleeperApiClient
- Enable a sustainable system for SleeperApiClient's maintainers to review contributions

Please follow these steps to have your contribution considered by the maintainers:

1. Formulate what your pull request is intended to do
2. Follow the [styleguides](#styleguides)

While the prerequisites above must be satisfied prior to having your pull request reviewed, the reviewer(s) may ask you to complete additional tests or other changes before your pull request can be ultimately accepted.

## Styleguides

### Git Commit Messages

* Use the present tense ("Add feature" not "Added feature")
* Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
* Limit the first line to 72 characters or less
* Reference issues and pull requests liberally after the first line

### PHP Styleguide

Stick to:
* [PSR-1](https://www.php-fig.org/psr/psr-1/)
* [PSR-12](https://www.php-fig.org/psr/psr-12/)
* [PSR Naming Convention](https://www.php-fig.org/bylaws/psr-naming-conventions/)
* [PSR-4 Autoloading Standard](https://www.php-fig.org/psr/psr-4/)

### Documentation Styleguide

* Use [Markdown](https://daringfireball.net/projects/markdown).
* Reference methods and classes in markdown with the custom `{}` notation:
    * Reference classes with `{ClassName}`
    * Reference instance methods with `{ClassName::methodName}`
    * Reference class methods with `{ClassName.methodName}`