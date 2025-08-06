# NAME_OF_THE_COMMAND

% General description of the command


## `/command/PATH/PATH`

% If this service is based on some other entity:

**Based on**: [/command/xyz](https://github.com/Parakoopa/riptide-repo/tree/master/command/xyz)

% Description of this version of the command, with the most important things to note

% Now follow descriptions of certain properties of this entity.

% If some properties are inherited, you only need to describe what was changed

% (=> what is actually contained in your yaml document)

% Properties that don't apply can be left out

### Role Requirements

**Role**: `xyz`

This command requires another service that has the role `xyz` set.

% Describe the requirements this other service needs to have and explain

% what this service is used for

### Environment variables

| Key         | Required? | Already set?       | Example Value(s) | Description                                                                       |
| ----------- | --------- | ------------------ | ---------------- | --------------------------------------------------------------------------------- |
| HELLO_WORLD | yes       | yes (default: XYZ) | XYZ, ABC         | Description of a setting environment value. Already set values should come first. |
| FOO_BAR     | no        | no                 | FOO, BAR         | Description 2                                                                     |
|             |           |                    |                  |                                                                                   |

### Additional volumes

| Name               | Source                      | Source path                                 | Target path | Description |
| ------------------ | --------------------------- | ------------------------------------------- | ----------- | ----------- |
| as_in_config_entry | Home directory              | ~/.npm                                      | ~/.npm      | Description |
|                    | Data folder                 | \_riptide/data/\_\_\_/name                  |             |             |
|                    | Part of source code         | src/foo                                     |             |             |
|                    | Config from another service | (config 'xyz' from service with role 'abc') |             |             |
|                    | Other                       | /hardcoded/path                             |             |             |

## `/command/PATH/PATH2`

% other variants, see above.

## `/command/PATH/PATH3`, `/command/PATH/PATH4`

% if variants are very similar, you can group them
