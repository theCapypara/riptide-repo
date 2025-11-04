# Node.js

[Node.js](https://nodejs.org/en/) is a JavaScript runtime built on Chrome's V8 JavaScript engine.


## `/command/node/base`

Latest Node.js version. Change image tag for other versions.

## `/command/node/X`

**Based on**: /command/node/base

Different Node.jS versions. Available versions:

- 8
- 10
- 11
- 12
- 13
- 14
- 15
- 16
- 17
- 18
- 19
- 20
- 21
- 22
- 23
- 24
- 25

Other versions can be used by changing the version of the image.

## `/command/node/in-node-service`

Running `node` command in the service with role `node`.

### Role Requirements

**Role**: `node`

This command requires another service that has the role `node` set.
