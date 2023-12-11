Jupyter
=======

Jupyter Service for python notebooks.

..  contents:: Index
    :depth: 2

``/service/jupyter/base``
-------------------------

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

Python Jupyter Notebooks server.

Suggested Roles
~~~~~~~~~~~~~~~

**Has roles**: ``jupyter``

This service has the role ``jupyter`` set and is a base for Jupyter related commands.

**Suggested roles**: ``src``, ``main``

This service should have access to the source code of the application via the role ``src``.

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------+-------------------+-------------+-----------------------+------------------------+
| Name      | Source            | Source path | Target path           | Description            |
+===========+===================+=============+=======================+========================+
| notebooks | Project directory | ./notebooks | /notebooks            | Jupyter notebooks root |
+-----------+-------------------+-------------+-----------------------+------------------------+
| jupyter   | Project directory | ./.jupyter  | /home/docker/.jupyter | Jupyter config         |
+-----------+-------------------+-------------+-----------------------+------------------------+
