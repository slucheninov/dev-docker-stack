# Docker NGINX PHP MySQL PhpMyadmin

Easy PHP MySQL development with Docker and Docker Compose.

## Requirements

Make sure you have the latest versions of **Docker** and **Docker Compose** installed on your machine.

Clone this repository or copy files from this repository to a new folder. 

## Configuration

Edit the `.env` file to change the default IP address, MySQL root password and Database name.

### Sites

The site files should be above this folder in the public folder. In the nginx folder you can add settings for the site, there are examples of how to do this.

```
./public/
```
#### Reload nginx

```
docker-compose exec nginx nginx -s reload
```

## Installation

Open a terminal and `cd` to the folder in which `docker-compose.yml` is saved and run:

```
docker-compose up -d
```

### Removing containers

To stop and remove all the containers use the`down` command:

```
docker-compose down
```

Use `-v` if you need to remove the database volume which is used to persist the database:

```
docker-compose down -v
```

### phpMyAdmin

You can also visit `http://127.0.0.1/pma/` to access phpMyAdmin after starting the containers.

The default username is `root`, and the password is the same as supplied in the `.env` file.


## Update version images
```sh
docker-compose pull
docker-compose up --force-recreate --build -d
docker image prune -f
```
