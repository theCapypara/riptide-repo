RabbitMQ
========

RabbitMQ_ message broker.

.. _RabbitMQ: https://www.rabbitmq.com/

..  contents:: Index
    :depth: 2

``/service/rabbitmq/base``
--------------------------

**Accessible via Proxy?**: no

**Runs as the user using Riptide?**: no

Latest version of RabbitMQ.

Environment variables
~~~~~~~~~~~~~~~~~~~~~

+-------------------------+-----------+------------------------------------+------------------+-------------+
| Key                     | Required? | Already set?                       | Example Value(s) | Description |
+=========================+===========+====================================+==================+=============+
| RABBITMQ_NODENAME       | yes       | yes, (default: "rabbit@localhost") | rabbit@localhost |             |
+-------------------------+-----------+------------------------------------+------------------+-------------+
| RABBITMQ_DEFAULT_USER   | yes       | yes, (default: "rabbit")           | rabbit           |             |
+-------------------------+-----------+------------------------------------+------------------+-------------+
| RABBITMQ_DEFAULT_PASS   | yes       | yes, (default: "rabbit")           | rabbit           |             |
+-------------------------+-----------+------------------------------------+------------------+-------------+
| RABBITMQ_USE_LONGNAME   | no        | yes, (default: "true")             | true, false      |             |
+-------------------------+-----------+------------------------------------+------------------+-------------+

Additional volumes
~~~~~~~~~~~~~~~~~~

+-----------------------+-----------------------------+---------------------------------------------+-------------------+---------------+
| Name                  | Source                      | Source path                                 | Target path       | Description   |
+=======================+=============================+=============================================+===================+===============+
| rabbitmq              | Data folder                 | _riptide/data/___/rabbitmq                  | /var/lib/rabbitmq | RabbitMQ Data |
+-----------------------+-----------------------------+---------------------------------------------+-------------------+---------------+

``/service/rabbitmq/3.6``
-------------------------

**Based on**: /service/rabbitmq/base

Version 3.6 of RabbitMQ.
