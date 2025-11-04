# Yarn

[Yarn] Node.js package manager.

This command template can also be used for other Node.js commands (by changing the command), if they
require access to the yarn cache.


## `/command/yarn/base`

Latest Yarn version with the latest Node.js version.

### Additional volumes

| Name   | Source         | Source path | Target path | Description       |
| ------ | -------------- | ----------- | ----------- | ----------------- |
| yarn   | Home directory | ~/.yarn     | ~/.yarn     | Yarn cache        |
| yarnrc | Home directory | ~/.yarnrc   | ~/.yarnrc   | Yarn config       |
| ssh    | Home directory | ~/.ssh      | ~/.ssh      | SSH configuration |

## `/command/yarn/nodeX`

**Based on**: /command/npm/base

Latest Yarn with different Node.js versions. Avaiable Node.js versions:

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

## `/command/yarn/in-node-service`

Running `yarn` command in the service with role `node`.

### Role Requirements

**Role**: `node`

This command requires another service that has the role `node` set.

[yarn]: https://yarnpkg.com/
