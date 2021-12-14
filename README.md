docker-symfony
==============

This is a stack for running Symfony 5.3.11, PHP7.2 using docker-compose tool.

# Installation

First, clone this repository:

```bash
$ git clone https://github.com/LaureCh/Symfony5.3-Docker.git
```

Next, add `symfony.localhost` in your `/etc/hosts` file.

Then, run:

```bash
$ docker-compose up
```

You are done, you can visit your Symfony application on the following URL: `http://symfony.localhost`

_Note :_ you can rebuild all Docker images by running:

```bash
$ docker-compose build
```

# How it works?

Here are the `docker-compose` built images:

* `db`: This is the MySQL database container (can be changed to postgresql or whatever in `docker-compose.yml` file),
* `php`: This is the PHP-FPM container including the application volume mounted on,
* `nginx`: This is the Nginx webserver container in which php volumes are mounted too,

This results in the following running containers:

```bash
> $ docker-compose ps
             Name                           Command               State                 Ports
-----------------------------------------------------------------------------------------------------------
mysql                            docker-entrypoint.sh --def ...   Up      0.0.0.0:3306->3306/tcp, 33060/tcp
nginx                            nginx                            Up      443/tcp, 0.0.0.0:80->80/tcp
php-fpm                          php-fpm7 -F                      Up      0.0.0.0:9000->9001/tcp
```


# Read logs

You can access Nginx and Symfony application logs in the following directories on your host machine:

* `logs/nginx`
* `logs/symfony`

