Keycloak
========

Open Source Identity and Access Management

..  contents:: Index
    :depth: 2

``/service/keycloak/base``
-------------------------

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

Latest version of the Keycloak Container image.

Configuration:
++++++++++++++

**User**: admin

**Password**: admin

**Features**: account-api,account2,account3,admin-api,admin-fine-grained-authz,admin2,authorization,ciba,client-policies,client-secret-rotation,declarative-user-profile,docker,impersonation,par,preview,recovery-codes,scripts,step-up-authentication,token-exchange,update-email

``/service/keycloak/21.0.1``
----------------------------

**Based on**: /service/keycloak/base

Additional versions of Keycloak. If you need other versions, use the ``base`` version and change the image tag.
