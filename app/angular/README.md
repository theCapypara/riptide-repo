# Angular

[Angular], platform for building mobile and desktop web applications.

Minimal project configuration for a basic Angular app.

Run `riptide cmd npm install` before trying to start the project.


## `/app/angular/base`

Angular base variant, based on Node 12.

### Services

#### www

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

The `ng serve` Angular webpack server.

##### Roles

**Has roles**: `src`, `main`

Has access to source code (`src`). This is the `main` service.

### Commands

#### node

**Based on**: [/command/node/12]

NodeJS, version 12.

#### npm

**Based on**: [/command/npm/node12](https://github.com/Parakoopa/riptide-repo/tree/master/command/npm)

NPM, latest version using Node 12.

#### yarn

**Based on**: [/command/yarn/node12](https://github.com/Parakoopa/riptide-repo/tree/master/command/yarn)

Yarn package manager, latest version using Node 12.

#### ng

**Based on**: [/command/node/12]

Angular CLI. Runs the `ng` command of the `node_modules` directory.

[/command/node/12]: https://github.com/Parakoopa/riptide-repo/tree/master/command/npm
[angular]: https://angular.io/
