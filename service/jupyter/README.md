# Jupyter

Jupyter Service for python notebooks.


## `/service/jupyter/base`

**Accessible via Proxy?**: yes

**Runs as the user using Riptide?**: yes

Python Jupyter Notebooks server.

### Suggested Roles

**Suggested roles**: `src`

This service should have access to the source code of the application via the role `src`.

### Additional volumes

| Name      | Source            | Source path | Target path           | Description            |
| --------- | ----------------- | ----------- | --------------------- | ---------------------- |
| notebooks | Project directory | ./notebooks | /notebooks            | Jupyter notebooks root |
| jupyter   | Project directory | ./.jupyter  | /home/docker/.jupyter | Jupyter config         |
