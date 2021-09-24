php
===

PHP_ scripting language. Uses the `riptidepy/php <https://hub.docker.com/r/riptidepy/php>`_ images.

There are variants for PHP 7.1 - 8.0.
Some include the Apache web server (``apache`` variants), others include php-fpm (``php-fpm`` variants) and some only the interpreter (``cli`` variants).

.. _PHP: https://php.net/
.. _Xdebug: https://xdebug.org/docs/remote
.. _PhpStorm path mapping key: https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-easier-debugging-of-remote-php-command-line-scripts/
.. _Apache: https://httpd.apache.org/

..  contents:: Index
    :depth: 2

``/service/php/base``
---------------------

**Accessible via Proxy?**: no

**Runs as the user using Riptide?**: yes

Base of all php variants.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``mail``

The service to use as SMTP server (eg. `/service/mailhog <https://github.com/Parakoopa/riptide-repo/tree/master/service/mailhog>`_).
If you don't have a SMTP service, add the role to this service instead. You will not be able to send emails then.

Suggested Roles
~~~~~~~~~~~~~~~

**Suggested roles**: ``src``, ``php``

This service should have access to the source code of the application via the role ``src``.

If this is your main PHP service, add the role ``php``.
You can then use the `/command/php/from-service <https://github.com/Parakoopa/riptide-repo/tree/master/command/php>`_ template for commands.

Environment variables
~~~~~~~~~~~~~~~~~~~~~

+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+
| Key              | Required? | Already set?                                                          | Example Value(s)                                    | Description                   |
+==================+===========+=======================================================================+=====================================================+===============================+
| PHP_IDE_CONFIG   | no        | yes, (default: "serverName=riptide-{{ parent().parent().name }}")     | serverName=riptide-{{ parent().parent().name }}     | `PhpStorm path mapping key`_  |
+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+

Note: ``XDEBUG_CONFIG`` that was present here before was removed. The config set there has been moved to the xdebug.ini. Add additional information via PHP INI files.

Config
~~~~~~

+----------+---------------------------+------------------------------------------+---------------------------------------------+
| Key      | Target                    | Should be replaced?                      | Description                                 |
+==========+===========================+==========================================+=============================================+
| php_ini  | /etc/php.d/z_riptide.ini  | no, add own files to the php.d directory | Disables opcache                            |
+----------+---------------------------+------------------------------------------+---------------------------------------------+
| msmtprc  | /etc/msmtprc              | no                                       | SMTP configuration, see "Role Requirements" |
+----------+---------------------------+------------------------------------------+---------------------------------------------+

``/service/php/base-apache``
----------------------------

**Based on**: /service/php/base

**Runs as the user using Riptide?**: yes, via environment variables ``APACHE_RUN_USER`` and ``APACHE_RUN_GROUP``

**Accessible via Proxy?**: yes

Variant that contains the Apache_ web server and integrates the PHP CGI module.

Environment variables
~~~~~~~~~~~~~~~~~~~~~

+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+
| Key              | Required? | Already set?                                                          | Example Value(s)                                    | Description                   |
+==================+===========+=======================================================================+=====================================================+===============================+
| APACHE_RUN_USER  | yes       | yes, (default: "#{{ os_user() }}")                                    | #{{ os_user() }}, www-data, #1000                   | User to run Apache as         |
+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+
| APACHE_RUN_GROUP | yes       | yes, (default: "#{{ os_group() }}")                                   | #{{ os_group() }}, www-data, #1000                  | Group to run Apache as        |
+------------------+-----------+-----------------------------------------------------------------------+-----------------------------------------------------+-------------------------------+

``/service/php/7.1/apache``, ``/service/php/7.2/apache``, ``/service/php/7.3/apache``, ``/service/php/7.4/apache``
------------------------------------------------------------------------------------------------------------------

**Based on**: /service/php/base-apache

Variant that contains the Apache_ web server and integrates the PHP CGI module. PHP 7.1 - 7.3.

``/service/php/7.1/cli``, ``/service/php/7.2/cli``, ``/service/php/7.3/cli``, ``/service/php/7.4/cli``
------------------------------------------------------------------------------------------------------

**Based on**: /service/php/base

Variant that only contains the PHP interpreter. PHP 7.1 - 7.3.

``/service/php/7.1/fpm``, ``/service/php/7.2/fpm``, ``/service/php/7.3/fpm``, ``/service/php/7.4/fpm``
------------------------------------------------------------------------------------------------------

**Based on**: /service/php/base

Variant that contains PHP-FPM. PHP 7.1 - 7.3.
