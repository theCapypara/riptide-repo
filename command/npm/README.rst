NPM
===

NPM_ Node.js package manager.

This command template can also be used for other Node.js commands (by changing the command), if they
require access to the npm cache.

.. _npm: https://www.npmjs.com/

..  contents:: Index
    :depth: 2

``/command/npm/base``
----------------------

Latest NPM version with the latest Node.js version.

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------------------+-----------------------------+---------------------------------------------+-------------+-------------+
| Name                  | Source                      | Source path                                 | Target path | Description |
+=======================+=============================+=============================================+=============+=============+
| npm                   | Home directory              | ~/.npm                                      | ~/.npm      | NPM cache   |
+-----------------------+-----------------------------+---------------------------------------------+-------------+-------------+
| npmrc                 | Home directory              | ~/.npmrc                                    | ~/.npmrc    | NPM config  |
+-----------------------+-----------------------------+---------------------------------------------+-------------+-------------+

``/command/npm/node8``
----------------------

**Based on**: /command/npm/base

NPM with Node.js version 8.

``/command/npm/node10``
-----------------------

**Based on**: /command/npm/base

NPM with Node.js version 10.
