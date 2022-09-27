Node.js
=======

`Node.js <https://nodejs.org/en/>`_ is a JavaScript runtime built on Chrome's V8 JavaScript engine.

..  contents:: Index
    :depth: 2

``/command/node/base``
----------------------

Latest Node.js version. Change image tag for other versions.

``/command/node/X``
-------------------

**Based on**: /command/node/base

Different Node.jS versions. Available versions:

- 8
- 10
- 11
- 12

Other versions can be used by changing the version of the image.

``/command/node/in-shopify-service``
------------------------------------

Running ``node`` command in the service with role ``shopify``.

Role Requirements
~~~~~~~~~~~~~~~~~

**Role**: ``shopify``

This command requires another service that has the role ``shopify`` set.
