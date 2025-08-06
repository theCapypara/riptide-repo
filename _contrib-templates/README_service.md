# NAME_OF_THE_SERVICE

% General description of the service


## `/service/PATH/PATH`

% If this service is based on some other entity:

**Based on**: [/service/xyz](https://github.com/Parakoopa/riptide-repo/tree/master/service)

**Accessible via Proxy?**: yes

% If your service is set to ``run_as_current_user: true``

**Runs as the user using Riptide?**: yes

% If your service is set to ``run_as_current_user: false`` but supports switching

% to the current user via environment variables

**Runs as the user using Riptide?**: yes, via environment variables `USER` and `GROUP`

% If your service is set to ``run_as_current_user: false``

**Runs as the user using Riptide?**: no

% Description of this version of the service, with the most important things to note

% Now follow descriptions of certain properties of this entity.

% If some properties are inherited, you only need to describe what was changed

% (=> what is actually contained in your yaml document)

% Properties that don't apply can be left out

### Role Requirements

**Role**: `xyz`

This service requires another service that has the role `xyz` set.

% Describe the requirements this other service needs to have and explain

% what this service is used for

### Suggested Roles

% If driver is set and role db:

**Has roles**: `db`

This service is a database and has the role db set. See the `driver` section for more
details.

% Apps may have additional roles set.

**Suggested roles**: `src`, `xyz`

% If role src:

This service should have access to the source code of the application via the role `src`.

% Explanation of other rules.

### Environment variables

| Key         | Required? | Already set?       | Example Value(s) | Description                                                                       |
| ----------- | --------- | ------------------ | ---------------- | --------------------------------------------------------------------------------- |
| HELLO_WORLD | yes       | yes (default: XYZ) | XYZ, ABC         | Description of a setting environment value. Already set values should come first. |
| FOO_BAR     | no        | no                 | FOO, BAR         | Description 2                                                                     |
|             |           |                    |                  |                                                                                   |

### Config

| Name               | Target        | Should be replaced?                                           | Description   |
| ------------------ | ------------- | ------------------------------------------------------------- | ------------- |
| as_in_config_entry | /path/to/file | yes, because the file provided is only a placeholder etc. pp. | A description |
|                    |               |                                                               |               |
|                    |               |                                                               |               |

### Additional volumes

| Name               | Source                      | Source path                                 | Target path | Description |
| ------------------ | --------------------------- | ------------------------------------------- | ----------- | ----------- |
| as_in_config_entry | Home directory              | ~/.npm                                      | ~/.npm      | Description |
|                    | Data folder                 | \_riptide/data/\_\_\_/name                  |             |             |
|                    | Part of source code         | src/foo                                     |             |             |
|                    | Config from another service | (config 'xyz' from service with role 'abc') |             |             |
|                    | Other                       | /hardcoded/path                             |             |             |

### Additional ports

| Name | Title        | Container Port | Host Start Port | Description |
| ---- | ------------ | -------------- | --------------- | ----------- |
| name | Title as set | 1234           | 1234            | Description |
|      |              |                |                 |             |
|      |              |                |                 |             |

### Logging

% add .log here to the names but don't specify it in the actual yaml

| Name     | Type    | Path / Command | Description |
| -------- | ------- | -------------- | ----------- |
| name.log | Path    | /some/where    | Description |
|          | Command | varnishlog     |             |
|          |         |                |             |

### Pre Start

% Description of pre_start commands

### Post Start

% Description of post_start commands

### Driver

**Database driver**: `mysql <https://github.com/Parakoopa/riptide-db-mysql>`

#### Configuration:

% values depend on driver, example is for mysql

**User**: root

**Password**: xyz

**Database**: foo

## `/service/PATH/PATH2`

% other variants, see above.

## `/service/PATH/PATH3`, `/service/PATH/PATH4`

% if variants are very similar, you can group them
