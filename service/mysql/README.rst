MySQL
=====

MySQL_ relational database management system.

.. _MySQL: https://www.mysql.com/

..  contents:: Index
    :depth: 2

``/service/mysql/base``
-----------------------

**Accessible via Proxy?**: no

**Runs as the user using Riptide?**: no

Latest version of MySQL. Configure database name and password via the driver settings.

Suggested Roles
~~~~~~~~~~~~~~~

**Has roles**: ``db``

This service is a database and has the role db set. See the ``driver`` section for more
details.

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------------------+-----------------------------+---------------------------------------------+----------------+---------------------------------------------------------------+
| Name                  | Source                      | Source path                                 | Target path    | Description                                                   |
+=======================+=============================+=============================================+================+===============================================================+
| n/a                   | Data folder                 | _riptide/data/___/___                       | /var/lib/mysql | Database data, managed by Riptide's database management tools |
+-----------------------+-----------------------------+---------------------------------------------+----------------+---------------------------------------------------------------+

Additional ports
~~~~~~~~~~~~~~~~

+------+--------------+----------------+-----------------+-------------+
| Name | Title        | Container Port | Host Start Port | Description |
+======+==============+================+=================+=============+
| mysql| MySQL Port   | 3306           | 3306            | MySQL Port  |
+------+--------------+----------------+-----------------+-------------+

Post Start
~~~~~~~~~~

Waits for the database to finish start-up.

Driver
~~~~~~

**Database driver**: ``mysql <https://github.com/Parakoopa/riptide-db-mysql>``

Configuration:
++++++++++++++

**User**: root

**Password**: mysql

**Database**: mysql

`/service/mysql/5.7``, ``/service/mysql/8.0``, ``/service/mysql/8.04``
----------------------------------------------------------------------

**Based on**: /service/mysql/base

Additional versions of MySQL. If you need other versions, use the ``base`` version and change the image tag.