Streamlit
=======

Streamlit Service.

..  contents:: Index
    :depth: 2

``/service/streamlit/base``
-------------------------

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

Python Streamlit server.

Suggested Roles
~~~~~~~~~~~~~~~

**Has roles**: ``streamlit``

This service has the role ``streamlit`` set and is a base for Streamlit related commands.

**Suggested roles**: ``src``, ``main``

This service should have access to the source code of the application via the role ``src``.

Additional volumes
~~~~~~~~~~~~~~~~~~

No additional volumes needed.
