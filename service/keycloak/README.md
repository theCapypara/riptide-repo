# Keycloak

Open Source Identity and Access Management


## `/service/keycloak/base`

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

Latest version of the Keycloak Container image.

### Additional volumes

| Name                       | Source                                                   | Source path                                                                                                        | Target path                                                                        | Description                                                                                                                     |
| -------------------------- | -------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| conf data providers themes | Config folder Data folder Providers folder Themes folder | \_riptide/data/\_\_\_/conf \_riptide/data/\_\_\_/data \_riptide/data/\_\_\_/providers \_riptide/data/\_\_\_/themes | /opt/keycloak/conf /opt/keycloak/data /opt/keycloak/providers /opt/keycloak/themes | Keycloak configuration files Database and cache related files Additional dependencies for providers Directory for custom themes |

#### Configuration:

**User**: admin

**Password**: admin

## `/service/keycloak/21.0.1`

**Based on**: /service/keycloak/base

Additional versions of Keycloak. If you need other versions, use the `base` version and change the image tag.
