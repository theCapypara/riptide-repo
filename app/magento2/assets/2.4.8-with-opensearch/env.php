<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => '{{ parent().services.db["$name"] }}',
                'dbname' => '{{ parent().services.db.driver.config.database }}',
                'username' => 'root',
                'password' => '{{ parent().services.db.driver.config.password }}',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => NULL
            ],
            'default' => [
                'host' => '{{ parent().services.db["$name"] }}',
                'dbname' => '{{ parent().services.db.driver.config.database }}',
                'username' => 'root',
                'password' => '{{ parent().services.db.driver.config.password }}',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '00000000000000000000000000000000'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => '{{ parent().services.redis["$name"] }}',
            'port' => '6379',
            'password' => '',
            'timeout' => '5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => '{{ parent().services.redis["$name"] }}',
                    'database' => '0',
                    'port' => '6379'
                ]
            ],
            'page_cache' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => '{{ parent().services.redis["$name"] }}',
                    'database' => '1',
                    'port' => '6379',
                    'compress_data' => '1'
                ]
            ]
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'queue' => [
        'amqp' => [
            'host' => '{{ parent().services.rabbitmq["$name"] }}',
            'port' => '5672',
            'user' => '{{ parent().services.rabbitmq.environment.RABBITMQ_DEFAULT_USER }}',
            'password' => '{{ parent().services.rabbitmq.environment.RABBITMQ_DEFAULT_PASS }}',
            'virtualhost' => '/',
            'ssl' => false,
        ],
    ],
    'install' => [
        'date' => 'Fri, 12 Apr 2019 15:40:00 +0000'
    ],
    'http_cache_hosts' => [
        [
            'host' => '{{ parent().services.varnish["$name"] }}',
            'port' => '{{ parent().services.varnish.port }}'
        ]
    ],
    'system' => [
        'default' => [
            'catalog' => [
                'search' => [
                    'engine' => 'opensearch',
                    'opensearch_server_hostname' => 'opensearch',
                    'opensearch_server_port' => 9200,
                ]
            ]
        ]
    ]
];
