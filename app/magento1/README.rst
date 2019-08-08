Magento 1
=========

Magento_ eCommerce platform, version 1.

The Riptide app comes with Redis and a mail catcher.

Web server is based on Apache.

Uses mageconfigsync_ for configuration management, if installed. If you want to
use mageconfigsync with Riptide create a file ``app/etc/config.yml`` with an environment ``dev``.

.. _mageconfigsync: https://github.com/punkstar/mageconfigsync
.. _Magento: https://magento.com/

..  contents:: Index
    :depth: 3

``/app/magento1/base``
----------------------

Magento 1 base variant.

Imports
~~~~~~~

+-------------+----------------+---------------+-------------------------------------+
| Key         | Title          | Target        | Description                         |
+=============+================+===============+=====================================+
| media_files | Media Files    | media         | Media files, such as product images |
+-------------+----------------+---------------+-------------------------------------+

Services
~~~~~~~~

www
+++

**Based on**: `/service/php/7.2/apache <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_

Apache and PHP 7.2.

Roles
.....

**Has roles**: ``src``, ``php``, ``main``

Has access to source code (``src``) and is marked as main PHP service (``php``).

Config
......

If you want to change additional Magento settings, we recommend using a module for configuration management.

+-----------------------+-------------------+---------------------+-----------------------------------------------------------------------------+
| Name                  | Target            | Should be replaced? | Description                                                                 |
+=======================+===================+=====================+=============================================================================+
| local_xml             | app/etc/local.xml | no                  |  Magento 1 local.xml, contains all database and base url settings, etc. pp. |
+-----------------------+-------------------+---------------------+-----------------------------------------------------------------------------+

Post Start
..........

Waits for ``magerun db:info`` to work (= db to start up).

Runs mageconfigsync_ to load configuration from the ``dev`` environment from the file ``app/etc/config.yml``.
If mageconfigsync is not installed this step silently fails.

Clears cache.

db
++

**Based on**: `/service/mysql/5.6 <https://github.com/Parakoopa/riptide-repo/tree/master/service/mysql>`_

MySQL 5.6 database.

Driver
......

Configuration:

**User**: root

**Password**: magento1

**Database**: magento1


redis
+++++

**Based on**: `/service/redis/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/redis>`_

Redis, used for Cache and Session.

rabbitmq
++++++++

**Based on**: `/service/rabbitmq/3.6 <https://github.com/Parakoopa/riptide-repo/tree/master/service/rabbitmq>`_

RabbitMQ, may be used as message broker.

mail
++++

**Based on**: `/service/mailhog/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/mailhog>`_

Mailhog, used as mail catcher.

Roles
.....

**Has roles**: ``mail``

Role required for PHP service.

Commands
~~~~~~~~

php
+++

**Based on**: `/command/php/from-service <https://github.com/Parakoopa/riptide-repo/tree/master/command/php>`_

PHP command.

magerun, n98-magerun
++++++++++++++++++++

`n98-magerun <https://github.com/netz98/n98-magerun>`_ by Netz98 for Magento development.

Additional volumes
..................

+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+
| Name                  | Source                      | Source path                                 | Target path          | Description            |
+=======================+=============================+=============================================+======================+========================+
| local_xml             | Config from another service | (config 'local_xml' from service 'php')     | app/etc/local.xml    | local.xml for Magento  |
+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+
| config                | Home Directory              | ~/.n98-magerun                              | ~/.n98-magerun  (ro) | Magerun configuration  |
+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+

composer
++++++++

**Based on**: `/command/composer/with-host-links <https://github.com/Parakoopa/riptide-repo/tree/master/command/composer>`_

Composer package manager.

mysql
+++++

**Based on**: `/command/mysql/from-service-db <https://github.com/Parakoopa/riptide-repo/tree/master/command/mysql>`_

MySQL client that load's the configuration from the service with role ``db``.

The client auto-connects to the database from this service.

``/app/magento1/ce/1.9``
------------------------

**Based on**: /app/magento1/base

Configuration for different versions of Magento Open Source, version 1.

``/app/magento1/ee/1.14``
-------------------------

**Based on**: /app/magento1/base

Configuration for different versions of Magento Commerce, version 1.
