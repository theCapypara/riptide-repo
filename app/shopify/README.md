# Shopify

[Shopify App] App for Shopify E-commerce software.

Get started quickly (after `riptide setup`):
Run `riptide cmd setup`, then check `shopify-app.md` for further steps.


## `/app/base`

Base for Shopify projects.

### Services

#### Shopify

[Shopify Service] Service for Shopify commands.

Suggested Roles

**Has roles**: `node`

This service has the role `node` set and is a base for commands that require Node.js.

**Suggested roles**: `main`

### Commands

#### shopify

[Shopify CLI] Command line interface for Shopify E-commerce software.

#### npm

[npm] Node.js package manager.

#### yarn

[yarn] Node.js package manager.

#### node

[node] JavaScript runtime.

#### get-makefile

Get the [Makefile] used to setup your Shopify project.
Use it like `get-makefile > Makefile`.

#### get-readme

Get the [README] containing notes how to develop your Shopify app with Riptide.
Use it like `get-readme > README.md`.

[makefile]: https://github.com/theCapypara/riptide-docker-images/blob/master/shopify/Makefile
[node]: /command/node
[npm]: /command/npm
[readme]: https://github.com/theCapypara/riptide-docker-images/blob/master/shopify/riptide.md
[shopify app]: https://shopify.dev/apps
[shopify cli]: https://shopify.dev/apps/tools/cli
[shopify service]: /service/shopify
[yarn]: /command/yarn
