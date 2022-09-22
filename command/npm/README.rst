NPM
===

NPM_ Node.js package manager.

This command template can also be used for other Node.js commands (by changing the command), if they
require access to the npm cache.

.. _npm: https://www.npmjs.com/

..  contents:: Index
    :depth: 2

``/command/npm/base``
---------------------

Latest NPM version with the latest Node.js version.

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+
| Name                  | Source                      | Source path                                 | Target path | Description        |
+=======================+=============================+=============================================+=============+====================+
| npm                   | Home directory              | ~/.npm                                      | ~/.npm      | NPM cache          |
+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+
| npmrc                 | Home directory              | ~/.npmrc                                    | ~/.npmrc    | NPM config         |
+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+
| ssh                   | Home directory              | ~/.ssh                                      | ~/.ssh      | SSH configuration  |
+-----------------------+-----------------------------+---------------------------------------------+-------------+--------------------+

``/command/npm/nodeX``
----------------------

**Based on**: /command/npm/base

Latest NPM with different Node.js versions. Avaiable Node.js versions:

- 8
- 10
- 11
- 12

``/command/npm/in-shopify-service``
-----------------------------------

Running ``npm`` command in the service with role ``shopify``.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``shopify``

This command requires another service that has the role ``shopify`` set.
