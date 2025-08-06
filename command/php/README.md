# php

[PHP] scripting language. Uses the [riptidepy/php](https://hub.docker.com/r/riptidepy/php) images.

There are variants for PHP 7.1 - 8.4 and one that uses the configuration of the service with role `php`.


## `/command/php/base`

Latest PHP version.

### Environment variables

| Key            | Required? | Already set?                                                      | Example Value(s)                                | Description                 |
| -------------- | --------- | ----------------------------------------------------------------- | ----------------------------------------------- | --------------------------- |
| PHP_IDE_CONFIG | no        | yes, (default: "serverName=riptide-{{ parent().parent().name }}") | serverName=riptide-{{ parent().parent().name }} | [PhpStorm path mapping key] |

Note: `XDEBUG_CONFIG` that was present here before was removed. Xdebug configuration are not available.
Use the `from-service` variant of this command for Xdebug support.

## `/command/php/X`

**Based on**: /command/php/base

Different PHP versions.

## `/command/php/from-service`

**Based on**: /command/php/base

Uses the PHP configuration of a service with role `php`. This variant can also be used to send mails.

### Role Requirements

**Role**: `php`

A service based on [/service/php](https://github.com/Parakoopa/riptide-repo/tree/master/service/php).

### Additional volumes

These volumes are used from the PHP service's config.

| Name    | Source                      | Source path                                     | Target path              | Description              |
| ------- | --------------------------- | ----------------------------------------------- | ------------------------ | ------------------------ |
| php_ini | Config from another service | (config 'php_ini' from service with role 'php') | /etc/php.d/z_riptide.ini | PHP service php settings |
| msmtprc | Config from another service | (config 'msmtprc' from service with role 'php') | /etc/msmtprc             | SMTP configuration       |

[apache]: https://httpd.apache.org/
[php]: https://php.net/
[phpstorm path mapping key]: https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-easier-debugging-of-remote-php-command-line-scripts/
[xdebug]: https://xdebug.org/docs/remote
