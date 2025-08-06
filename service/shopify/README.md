# shopify

Shopify Service for Shopify E-commerce software app.


## `/service/shopify/base`

**Accessible via Proxy?**: no

**Runs as the user using Riptide?**: yes

Base to run all Shopify related commands.

### Suggested Roles

**Suggested roles**: `src`

This service should have access to the source code of the application via the role `src`.

### Additional volumes

| Name           | Source         | Source path                      | Target path                      | Description        |
| -------------- | -------------- | -------------------------------- | -------------------------------- | ------------------ |
| shopify_config | Home directory | ~/.config/shopify-cli-kit-nodejs | ~/.config/shopify-cli-kit-nodejs | Shopify CLI config |
| shopify_cache  | Home directory | ~/.cache/shopify-cli-nodejs      | ~/.cache/shopify-cli-nodejs      | Shopify CLI cache  |
| ngrok_config   | Home directory | ~/.config/ngrok                  | ~/.config/ngrok                  | ngrok config       |
| yarn_cache     | Home directory | ~/.cache/yarn                    | ~/.cache/yarn                    | yarn cache         |
| npm_cache      | Home directory | ~/.npm                           | ~/.npm                           | npm cache          |
| ssh            | Home directory | ~/.ssh                           | ~/.ssh                           | SSH keys           |
| tmp            | Home directory | '{{ get_tempdir() }}'            | /tmp                             | temporary files    |
