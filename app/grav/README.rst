Grav
====

Grav_ Web-platform.

Web server is based on Apache. The Riptide app comes with a mail catcher.

Comes with a default user (name: ``riptide``, password ``12345``).

.. _Grav: https://getgrav.org/

..  contents:: Index
    :depth: 3

``/app/grav/base``
------------------

Grav base variant.

Imports
~~~~~~~

+-------------+---------------------------+---------------+------------------------------------------+
| Key         | Title                     | Target        | Description                              |
+=============+===========================+===============+==========================================+
| images      | Images                    | images        | Image files                              |
+-------------+---------------------------+---------------+------------------------------------------+
| pages       | CMS Pages                 | user/pages    | CMS pages                                |
+-------------+---------------------------+---------------+------------------------------------------+
| plugins     | Plugin configuration      | user/plugins  | Configuration and code for some plugins  |
+-------------+---------------------------+---------------+------------------------------------------+

Services
~~~~~~~~

php
+++

**Based on**: `/service/php/7.2/apache <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_

PHP Version 7.2 with the Apache 2 webserver.

Roles
.....

**Has roles**: ``src``, ``php``, ``main``

Has access to source code (``src``) and is marked as main PHP service (``php``). This is the ``main`` service.

Config
......

If you want to change additional Magento settings, we recommend adding additional ``bin/magento config:set`` to ``post_start``
or using a module for configuration management.

+-----------------------+-----------------------------+----------------------------------------------------+------------------------------------------------------------------------+
| Name                  | Target                      | Should be replaced?                                | Description                                                            |
+=======================+=============================+====================================================+========================================================================+
| user_config           | user/config/system.yaml     | maybe (if your page requires custom configuration) |  System configuration file.                                            |
+-----------------------+-----------------------------+----------------------------------------------------+------------------------------------------------------------------------+
| security_config       | user/config/security.yaml   | maybe                                              |  Default security configuration (salt).                                |
+-----------------------+-----------------------------+----------------------------------------------------+------------------------------------------------------------------------+
| riptide_account       | user/accounts/riptide.yaml  | no                                                 |  Default system user (riptide). Password is 12345.                     |
+-----------------------+-----------------------------+----------------------------------------------------+------------------------------------------------------------------------+

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

grav
++++

``bin/grav`` command.

Runs in the ``php`` service.

composer
++++++++

**Based on**: `/command/composer/with-host-links <https://github.com/Parakoopa/riptide-repo/tree/master/command/composer>`_

Composer package manager.

npm
+++

**Based on**: `/command/npm/node12 <https://github.com/Parakoopa/riptide-repo/tree/master/command/npm>`_

NPM JavaScript package manager. Might be useful for frontend building.


node
++++

**Based on**: `/command/node/12 <https://github.com/Parakoopa/riptide-repo/tree/master/command/node>`_

NodeJS. Might be useful for frontend building.
