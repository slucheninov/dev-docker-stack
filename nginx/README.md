# Configuration nginx host

add new SSL host copy default-ssl.conf_ to testing.com-ssl.conf

## Reload nginx

```
docker-compose exec nginx nginx -s reload
```