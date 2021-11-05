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

XXX You can mount additional nginx conf to /etc/nginx/craftcms/x-*.conf