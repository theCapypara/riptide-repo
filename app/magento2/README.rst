Magento 2
=========

Magento_ eCommerce platform, version 2.

The Riptide app comes with Varnish, Redis, RabbitMQ and a mail catcher.

Web server is based on Nginx. The "Apache" variants contain web servers based on Apache.

.. _Magento: https://magento.com/

..  contents:: Index
    :depth: 3

``/app/magento2/base``
----------------------

Magento 2 base variant, using Nginx.

Imports
~~~~~~~

+-------------+----------------+---------------+-------------------------------------+
| Key         | Title          | Target        | Description                         |
+=============+================+===============+=====================================+
| media_files | Media Files    | pub/media     | Media files, such as product images |
+-------------+----------------+---------------+-------------------------------------+

Services
~~~~~~~~

php
+++

**Based on**: `/service/php/7.2/fpm <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_

PHP-FPM Version 7.2

Roles
.....

**Has roles**: ``src``, ``php``

Has access to source code (``src``) and is marked as main PHP service (``php``).

Config
......

If you want to change additional Magento settings, we recommend adding additional ``bin/magento config:set`` to ``post_start``
or using a module for configuration management.

+-----------------------+-----------------+---------------------+------------------------------------------------------------------------+
| Name                  | Target          | Should be replaced? | Description                                                            |
+=======================+=================+=====================+========================================================================+
| env_php               | app/etc/env.php | no                  |  Magento 2 env.php, contains all database and redis settings, etc. pp. |
+-----------------------+-----------------+---------------------+------------------------------------------------------------------------+

Post Start
..........

Waits for ``bin/magento`` to work (= redis and db to start up).

Changes settings, such as the base url, and clears cache.

www
+++

**Based on**: `/service/nginx/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/nginx>`_

Nginx, linked with the PHP service.

Reads the ``nginx.conf.sample`` provided by Magento for additional server configuration.

Roles
.....

**Has roles**: ``src``, ``varnish``

Has access to source code (``src``) and is marked as backend server for Varnish (``varnish``).

Config
......

+-----------------------+--------------------------------+---------------------+------------------------------------------------------------------------+
| Name                  | Target                         | Should be replaced? | Description                                                            |
+=======================+================================+=====================+========================================================================+
| env_php               | app/etc/env.php                | no                  |  Magento 2 env.php, contains all database and redis settings, etc. pp. |
+-----------------------+--------------------------------+---------------------+------------------------------------------------------------------------+
| magento_nginx_conf    | /etc/nginx/conf.d/default.conf | no                  |  Nginx server settings                                                 |
+-----------------------+--------------------------------+---------------------+------------------------------------------------------------------------+

Pre Start
.........

Waits for ``php`` to start. Would crash otherwise.

varnish
+++++++

**Based on**: `/service/varnish/4 <https://github.com/Parakoopa/riptide-repo/tree/master/service/varnish>`_

Varnish cache server. Uses ``www`` as backend server.

Roles
.....

**Has roles**: ``main``

Config
......

+-----+--------------------------+---------------------+-------------------------------+
| Key | Target                   | Should be replaced? | Description                   |
+=====+==========================+=====================+===============================+
| vcl | /etc/varnish/default.vcl | maybe               | Magento 2 default VCL         |
+-----+--------------------------+---------------------+-------------------------------+

db
++

**Based on**: `/service/mysql/5.6 <https://github.com/Parakoopa/riptide-repo/tree/master/service/mysql>`_

MySQL 5.6 database.

Driver
......

Configuration:

**User**: root

**Password**: magento2

**Database**: magento2


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

magerun, magerun2, n98-magerun, n98-magerun2
++++++++++++++++++++++++++++++++++++++++++++

`n98-magerun2 <https://github.com/netz98/n98-magerun2>`_ by Netz98 for Magento development.

Additional volumes
..................

+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+
| Name                  | Source                      | Source path                                 | Target path          | Description            |
+=======================+=============================+=============================================+======================+========================+
| env_php               | Config from another service | (config 'env_php' from service 'php')       | app/etc/env.php      | env.php for Magento    |
+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+
| config                | Home Directory              | ~/.n98-magerun2                             | ~/.n98-magerun2 (ro) | Magerun2 configuration |
+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+

magento
+++++++

``bin/magento`` command. Not included in image, read from working directory instead.

Additional volumes
..................

+-----------------------+-----------------------------+---------------------------------------------+----------------------+------------------------+
| Name                  | Source                      | Source path                                 | Target path          | Description            |
+=======================+=============================+=============================================+======================+========================+
| env_php               | Config from another service | (config 'env_php' from service 'php')       | app/etc/env.php      | env.php for Magento    |
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

``/app/magento2/apache``
------------------------

**Based on**: /app/magento2/base

Variant of Magento using the Apache web-server instead.

Services
~~~~~~~~

www
+++

Is removed.

The apache web-server with a PHP CGI module is in the "php" service.

php
+++

**Based on**: `/service/php/7.2/apache <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_

Apache web server + PHP.


``/app/magento2/ce/X``
------------------------

**Based on**: /app/magento2/base

Configuration for different versions of Magento Open Source, version 2. Using Nginx.

Available versions:

- 2.3

``/app/magento2/ee/X``
------------------------

**Based on**: /app/magento2/base

Configuration for different versions of Magento Commerce, version 2. Using Nginx.

Available versions:

- 2.3


``/app/magento2/ce/X-apache``
-----------------------------

**Based on**: /app/magento2/apache

Configuration for different versions of Magento Open Source, version 2. Using Apache.

Available versions:

- 2.3

``/app/magento2/ee/X-apache``
-----------------------------

**Based on**: /app/magento2/apache

Configuration for different versions of Magento Commerce, version 2. Using Apache.

Available versions:

- 2.3
