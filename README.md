# Docker stack nginx + php + mysql

## Update version images
```sh
docker-compose pull
docker-compose up --force-recreate --build -d
docker image prune -f
```
