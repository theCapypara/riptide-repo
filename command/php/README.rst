php
===

PHP_ scripting language. Uses the `riptidepy/php <https://hub.docker.com/r/riptidepy/php>`_ images.

There are variants for PHP 7.1 - 7.3 and one that uses the configuration of the service with role ``php``.

.. _PHP: https://php.net/
.. _Xdebug: https://xdebug.org/docs/remote
.. _PhpStorm path mapping key: https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-easier-debugging-of-remote-php-command-line-scripts/
.. _Apache: https://httpd.apache.org/


..  contents:: Index
    :depth: 2

``/command/php/base``
----------------------

Latest PHP version.

Environment variables
~~~~~~~~~~~~~~~~~~~~~

+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+
| Key              | Required? | Already set?                                                          | Example Value(s)                                    | Description                   |
+==================+===========+=======================================================================+=====================================================+===============================+
| XDEBUG_CONFIG    | no        | yes, (default: "remote_host={{ host_address() }}")                    | remote_host={{ host_address() }                     | Configuration for Xdebug_     |
+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+
| PHP_IDE_CONFIG   | no        | yes, (default: "serverName=riptide-{{ parent().parent().name }}")     | serverName=riptide-{{ parent().parent().name }}     | `PhpStorm path mapping key`_  |
+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+


``/command/php/7.1``, ``/command/php/7.2``, ``/command/php/7.3``
----------------------------------------------------------------

**Based on**: /command/php/base

Specific PHP versions.

``/command/php/from-service``
-----------------------------

**Based on**: /command/php/base

Uses the PHP configuration of a service with role ``php``. This variant can also be used to send mails.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``php``

A service based on `/service/php <https://github.com/Parakoopa/riptide-repo/tree/master/service/php>`_.

Additional volumes
~~~~~~~~~~~~~~~~~~

These volumes are used from the PHP service's config.

+-----------------------+-----------------------------+-------------------------------------------------+--------------------------+--------------------------+
| Name                  | Source                      | Source path                                     | Target path              | Description              |
+=======================+=============================+=================================================+==========================+==========================+
| php_ini               | Config from another service | (config 'php_ini' from service with role 'php') | /etc/php.d/z_riptide.ini | PHP service php settings |
+-----------------------+-----------------------------+-------------------------------------------------+--------------------------+--------------------------+
| msmtprc               | Config from another service | (config 'msmtprc' from service with role 'php') | /etc/msmtprc             | SMTP configuration       |
+-----------------------+-----------------------------+-------------------------------------------------+--------------------------+--------------------------+
