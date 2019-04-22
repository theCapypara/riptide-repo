MySQL
=====

MySQL_ relational database management system.

Client command to be used with `/service/mysql <https://github.com/Parakoopa/riptide-repo/tree/master/service/mysql>`_.

.. _MySQL: https://www.mysql.com/

..  contents:: Index
    :depth: 2

``/command/mysql/from-service-db``
----------------------------------

MySQL client that load's the configuration from the service with role ``db``.

The client auto-connects to the database from this service.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``db``

MySQL service that the configuration will be loaded from.
