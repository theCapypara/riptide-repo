# Jupyter

[Jupyter App] Web-based interactive computing platform.

Get started quickly (after `riptide setup`):
Run `riptide start`, then check `JUPYTER.md`.


## `/app/base`

Base for Jupyter projects.

### Services

#### Jupyter

[Jupyter Service] Service for Jupyter Notebook server.

Suggested Roles

**Has roles**: `python`

This service has the role `python` set and is a base for commands that require Python.

**Suggested roles**: `main`

### Commands

#### python

[python] Python CLI.

#### pip

[pip] Python package manager.

#### jupyter

[Jupyter CLI] Command line interface for Jupyter.

#### poetry

[poetry] Advanced python package manager.

[jupyter app]: https://jupyter.org
[jupyter cli]: https://docs.jupyter.org/en/latest/index.html
[jupyter service]: /service/jupyter
[pip]: /command/pip
[poetry]: /command/poetry
[python]: /command/python
