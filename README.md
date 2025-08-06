# ![Riptide](https://riptide-docs.readthedocs.io/en/latest/_images/logo.png)

[<img src="https://readthedocs.org/projects/riptide-docs/badge/?version=latest" alt="Documentation Status">](https://readthedocs.org/projects/riptide-docs/badge/?version=latest)

Riptide is a set of tools to manage development environments for web applications.
It's using container virtualization tools, such as [Docker](https://www.docker.com/)
to run all services needed for a project.

It's goal is to be easy to use by developers.
Riptide abstracts the virtualization in such a way that the environment behaves exactly
as if you were running it natively, without the need to install any other requirements
the project may have.

Riptide consists of a few reposiories, find the entire [overview](https://riptide-docs.readthedocs.io/en/latest/development.html) in the documentation.

## Riptide Repository

This repository contains services, commands and apps that can be used in Riptide projects.

The master branch contains the up-to-date versions for all objects, branches for certain
Riptide versions may exist (eg. 0.1 for version 0.1).

The apps, services and commands contain their own README files with more information.
Browse the `app`, `service` and `command` directories to find objects you may
find useful for your projects.

This is the public community repository for Riptide. Please feel free to contribute!

## Contributing

If you want to submit your own apps, services and or commands, open a pull request. Your
objects need to be valid for the newest Riptide version, or,if you are opening a pull
request for older versions, with the respective version. Automatic tests will check basic
functionality for your objects.

You need to provide an up-to-date documentation for your object, in form of a README.rst. Templates
can be found in the \_contrib-templates directory.

### Submission guidelines

- Images should be either:

  - official (marked as "Official Image" in the Docker hub),
  - from the "[riptidepy](https://hub.docker.com/u/riptidepy)" org on Docker Hub (see [docker_images]).
  - or very well maintained, open source and trusted (eg. high amount of stars on Github)

- When using variables, do not reference fields that contain other variables (expect
  in `<Service>.notices`).

- When using the variable helper function `parent()`, do not reference fields that
  contain other variables.

- `do_not_create_user` must not be `True` for services.

- Standalone services must not have any roles set (except for `db`).

More Guidelines may be added.

## Documentation

Documentation for apps, services and commands can be found inside the directories
of this repository.

The complete documentation for Riptide can be found at [Read the Docs](https://riptide-docs.readthedocs.io/en/latest/).
