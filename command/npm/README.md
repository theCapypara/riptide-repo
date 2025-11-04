# NPM

[NPM] Node.js package manager.

This command template can also be used for other Node.js commands (by changing the command), if they
require access to the npm cache.


## `/command/npm/base`

Latest NPM version with the latest Node.js version.

### Additional volumes

| Name  | Source         | Source path | Target path | Description       |
| ----- | -------------- | ----------- | ----------- | ----------------- |
| npm   | Home directory | ~/.npm      | ~/.npm      | NPM cache         |
| npmrc | Home directory | ~/.npmrc    | ~/.npmrc    | NPM config        |
| ssh   | Home directory | ~/.ssh      | ~/.ssh      | SSH configuration |

## `/command/npm/nodeX`

**Based on**: /command/npm/base

Latest NPM with different Node.js versions. Avaiable Node.js versions:

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

## `/command/npm/in-node-service`

Running `npm` command in the service with role `node`.

### Role Requirements

**Role**: `node`

This command requires another service that has the role `node` set.

[npm]: https://www.npmjs.com/
