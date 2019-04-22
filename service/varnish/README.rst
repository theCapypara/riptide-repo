Varnish
=======

Varnish_ Cache is an HTTP caching server.

.. _Varnish: https://varnish-cache.org/

..  contents:: Index
    :depth: 2

``/service/varnish/4``
----------------------

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: no

Varnish version 4. Make sure to replace the default VCL.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``varnish``

Use this in your VCL as backend server::

    backend default {
        .host = "{{ parent().get_service_by_role('varnish')['$name'] }}";
    }

Your ``varnish`` target should have an HTTP server running on port 80.

Suggested Roles
~~~~~~~~~~~~~~~

**Suggested roles**: ``main``

Environment variables
~~~~~~~~~~~~~~~~~~~~~

+-------------+-----------+-------------------------------------------+--------------------------+----------------------------------------+
| Key         | Required? | Already set?                              | Example Value(s)         | Description                            |
+=============+===========+===========================================+==========================+========================================+
| VCL_CONFIG  | yes       | yes (default: "/etc/varnish/default.vcl") | /etc/varnish/default.vcl | Path to the VCL, should NOT be changed |
+-------------+-----------+-------------------------------------------+--------------------------+----------------------------------------+

Config
~~~~~~

+-----+--------------------------+---------------------+-------------------------------+
| Key | Target                   | Should be replaced? | Description                   |
+=====+==========================+=====================+===============================+
| vcl | /etc/varnish/default.vcl | yes                 | VCL configuration for Varnish |
+-----+--------------------------+---------------------+-------------------------------+

Logging
~~~~~~~

+-------------+---------+----------------+-------------+
| Name        | Type    | Path / Command | Description |
+=============+=========+================+=============+
| varnish.log | Command | varnishlog     | varnishlog  |
+-------------+---------+----------------+-------------+

Pre Start
~~~~~~~~~

Wait's for the backend service server to be reachable (otherwise varnish would crash).
