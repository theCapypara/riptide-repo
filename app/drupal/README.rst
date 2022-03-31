Drupal
======

Drupal_ Content Management System.

.. _Drupal: https://www.drupal.org/

..  contents:: Index
    :depth: 3

``/app/craft/latest``
---------------------

Configuration for the latest Drupal version.


Imports
~~~~~~~

+---------------+---------------------------+-----------------------+------------------------+
| Key           | Title                     | Target                | Description            |
+===============+===========================+=======================+========================+
| default_files | Files for default site    | sites/default/files   | Files for default site |
+---------------+---------------------------+-----------------------+------------------------+

Services
~~~~~~~~

dwww
++++

**Based on**: `/service/nginx/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/nginx>`_

Nginx webserver.

Roles
.....

**Has roles**: ``src``, ``main``

Has access to source code (``src``) and is marked as main service (``main``). 

Config
......

+-----------------------+---------------------------------------------------------+--------------------------------+---------------------------------------------------------------------------------------------------------------------+
| Name                  | Target                                                  | Should be replaced?            | Description                                                                                                         |
+=======================+=========================================================+================================+=====================================================================================================================+
| drupal_nginx_conf     | /etc/nginx/conf.d/default.conf                          | no                             | Nginx configuration file.                                                                                           |
+-----------------------+---------------------------------------------------------+--------------------------------+---------------------------------------------------------------------------------------------------------------------+
| settings              | sites/default/settings.php                              | no                             | Basic system settings. This will require a "riptide_project_settings.php" in the root of the project, if it exists. |
+-----------------------+---------------------------------------------------------+--------------------------------+---------------------------------------------------------------------------------------------------------------------+

dphp
++++

**Based on**: `/service/php/7.4/fpm <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_

PHP FPM 7.4

Roles
.....

**Has roles**: ``src``, ``php``

Has access to source code (``src``) and is marked as the main PHP service (``php``). 

Config
......

+-----------------------+---------------------------------------------------------+--------------------------------+---------------------------------------------------------------------------------------------------------------------+
| Name                  | Target                                                  | Should be replaced?            | Description                                                                                                         |
+=======================+=========================================================+================================+=====================================================================================================================+
| settings              | sites/default/settings.php                              | no                             | Basic system settings. This will require a "riptide_project_settings.php" in the root of the project, if it exists. |
+-----------------------+---------------------------------------------------------+--------------------------------+---------------------------------------------------------------------------------------------------------------------+

dmail
+++++

**Based on**: `/service/mailhog/latest <https://github.com/Parakoopa/riptide-repo/tree/master/service/mailhog>`_

Mailhog, used as mail catcher.

Roles
.....

**Has roles**: ``mail``

Role required for PHP service.

ddb
+++

**Based on**: `/service/mysql/5.7 <https://github.com/Parakoopa/riptide-repo/tree/master/service/mysql>`_

MySQL 5.7 database.

Driver
......

Configuration:

**User**: root

**Password**: drupal

**Database**: drupal

Commands
~~~~~~~~

php
+++

**Based on**: `/command/php/from-service <https://github.com/Parakoopa/riptide-repo/tree/master/command/php>`_

PHP command.

drush
+++++

Drush_ is a command-line shell and scripting interface for Drupal. 

.. _Drush: https://github.com/drush-ops/drush

mysql
+++++

**Based on**: `/command/mysql/from-service-db <https://github.com/Parakoopa/riptide-repo/tree/master/command/mysql>`_

MySQL client that load's the configuration from the service with role ``db``.

The client auto-connects to the database from this service.
