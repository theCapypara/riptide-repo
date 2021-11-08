Craft CMS
=========

Craft_ Content Management System.

This setup uses the official Docker images and is close to the standard Docker Compose setup. 
The Riptide app comes with a mail catcher.

The default setup assumes one volume for assets at web/uploads.

In order to use Redis (which comes by default with this), make sure your app
is configured to use Redis as explained in the documentation_ and uses the
environment variable REDIS_HOST for the hostname.

In order to use Varnish, install the plugin Upper with default configuration.

.. _Craft: https://craftcms.com/
.. _documentation: https://craftcms.com/docs/3.x/config/#redis-example

..  contents:: Index
    :depth: 3

``/app/craft/base``
-------------------

Craft CMS base variant.


Imports
~~~~~~~

+-------------+---------------------------+---------------+----------------------------------------------+
| Key         | Title                     | Target        | Description                                  |
+=============+===========================+===============+==============================================+
| uploads     | Images and Assets         | web/uploads   | Parent directory of the default asset volume.|
+-------------+---------------------------+---------------+----------------------------------------------+

Services
~~~~~~~~

cvarnish
++++++++

**Based on**: `/service/varnish/6 <https://github.com/Parakoopa/riptide-repo/tree/master/service/varnish>`_
**Image**: ``ghcr.io/plopix/docker-varnish6/varnish6:latest``

Varnish cache server. Uses ``www`` as backend server. The custom image is used, because
that image contains the XKey plugin.

Roles
.....

**Has roles**: ``main``

Config
......

+-----+--------------------------+---------------------+-------------------------------+
| Key | Target                   | Should be replaced? | Description                   |
+=====+==========================+=====================+===============================+
| vcl | /etc/varnish/default.vcl | maybe               | A VCL that works with Upper   |
+-----+--------------------------+---------------------+-------------------------------+


cwww
++++

**Based on**: `/service/php/7.4/fpm <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_
**Image:** ``craftcms/nginx:7.4-dev``

PHP Version 7.2 with the Nginx webserver; image is the official Craft CMS image.

Roles
.....

**Has roles**: ``src``, ``php``, ``varnish``

Has access to source code (``src``) and is marked as main PHP service (``php``). 
It is the backend for Varnish (``varnish``).

Config
......

Riptide manages the .env file used with Craft CMS directly. Some values in that file get dynamically generated.
The environment file is loaded by Craft automatically and should be used in the configuration PHP files.
The advantage of directly working with this file, is that it is also read by CLI out of the box.

You can extend the Craft CMS Nginx server configuration by adding additional config files at ``/etc/nginx/craftcms/x-*.conf``.

+-----------------------+---------------------------------------------------------+--------------------------------+------------------------------------------------------------------------------------+
| Name                  | Target                                                  | Should be replaced?            | Description                                                                        |
+=======================+=========================================================+================================+====================================================================================+
| _empty                | /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini     | no                             |  Empty dummy file to override the config in the image that always enables Xdebug.  |
+-----------------------+---------------------------------------------------------+--------------------------------+------------------------------------------------------------------------------------+
| env                   | .env                                                    | maybe (if you need to extend)  | Craft CMS configuration environment variables                                      |
+-----------------------+---------------------------------------------------------+--------------------------------+------------------------------------------------------------------------------------+
| nginx_conf            | /etc/nginx/nginx.conf                                   | no                             | Nginx config, based on official image, changed to move PID file due to permissions |
+-----------------------+---------------------------------------------------------+--------------------------------+------------------------------------------------------------------------------------+
| craft_nginx_conf      | /etc/nginx/conf.d/default.conf                          | no                             | Craft nginx server config, based on official image, change for base path           |
+-----------------------+---------------------------------------------------------+--------------------------------+------------------------------------------------------------------------------------+

cmail
+++++

**Based on**: `/service/mailhog/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/mailhog>`_

Mailhog, used as mail catcher.

Roles
.....

**Has roles**: ``mail``

Role required for PHP service.

credis
++++++

**Based on**: `/service/redis/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/redis>`_

Redis, used for Cache.

cdb
+++

**Based on**: `/service/mysql/5.7 <https://github.com/Parakoopa/riptide-repo/tree/master/service/mysql>`_

MySQL 5.7 database.

Driver
......

Configuration:

**User**: root

**Password**: craft

**Database**: craft

Commands
~~~~~~~~

php
+++

**Based on**: `/command/php/from-service <https://github.com/Parakoopa/riptide-repo/tree/master/command/php>`_

PHP command.

craft
+++++

``./craft`` command.

Runs in the ``php`` service.

composer
++++++++

**Based on**: `/command/composer/with-host-links <https://github.com/Parakoopa/riptide-repo/tree/master/command/composer>`_

Composer package manager.

mysql
+++++

**Based on**: `/command/mysql/from-service-db <https://github.com/Parakoopa/riptide-repo/tree/master/command/mysql>`_

MySQL client that load's the configuration from the service with role ``db``.

The client auto-connects to the database from this service.
