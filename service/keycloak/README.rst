Keycloak
========

Open Source Identity and Access Management

..  contents:: Index
    :depth: 2

``/service/keycloak/base``
-------------------------

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

Latest version of the Keycloak Container image.

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------+------------------+-----------------------------+-------------------------+---------------------------------------+
|   Name    |      Source      |         Source path         |       Target path       |              Description              |
+===========+==================+=============================+=========================+=======================================+
| conf      | Config folder    | _riptide/data/___/conf      | /opt/keycloak/conf      | Keycloak configuration files          |
| data      | Data folder      | _riptide/data/___/data      | /opt/keycloak/data      | Database and cache related files      |
| providers | Providers folder | _riptide/data/___/providers | /opt/keycloak/providers | Additional dependencies for providers |
| themes    | Themes folder    | _riptide/data/___/themes    | /opt/keycloak/themes    | Directory for custom themes           |
+-----------+------------------+-----------------------------+-------------------------+---------------------------------------+

Configuration:
++++++++++++++

**User**: admin

**Password**: admin

``/service/keycloak/21.0.1``
----------------------------

**Based on**: /service/keycloak/base

Additional versions of Keycloak. If you need other versions, use the ``base`` version and change the image tag.
