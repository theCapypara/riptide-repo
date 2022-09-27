Yarn
====

Yarn_ Node.js package manager.

This command template can also be used for other Node.js commands (by changing the command), if they
require access to the yarn cache.

.. _yarn: https://yarnpkg.com/

..  contents:: Index
    :depth: 2

``/command/yarn/base``
----------------------

Latest Yarn version with the latest Node.js version.

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+
| Name                  | Source                      | Source path                                 | Target path | Description        |
+=======================+=============================+=============================================+=============+====================+
| yarn                  | Home directory              | ~/.yarn                                     | ~/.yarn     | Yarn cache         |
+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+
| yarnrc                | Home directory              | ~/.yarnrc                                   | ~/.yarnrc   | Yarn config        |
+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+
| ssh                   | Home directory              | ~/.ssh                                      | ~/.ssh      | SSH configuration  |
+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+

``/command/yarn/nodeX``
-----------------------

**Based on**: /command/npm/base

Latest Yarn with different Node.js versions. Avaiable Node.js versions:

- 8
- 10
- 11
- 12

``/command/yarn/in-shopify-service``
------------------------------------

Running ``yarn`` command in the service with role ``shopify``.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``shopify``

This command requires another service that has the role ``shopify`` set.
