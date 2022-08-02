All the configuration was based on this repo: https://github.com/aschmelyun/docker-compose-laravel

You can check an article from the author [here](https://dev.to/aschmelyun/the-beauty-of-docker-for-local-laravel-development-13c0).

## Comments about the application

This application is actually a project that I had to do when I was taking classes about databases. There's a pretty simple interface just to interact with the database to make sure that the whole application works properly. Everything in the application was named using Portuguese words.

## Getting started

Clone the repo, navigate in your terminal to the directory you cloned this, and run the containers with the following command 

`docker-compose up -d --build`.

As this repo already contains a simple laravel application, you will need to do everything that you would normally do for setting up a cloned laravel app

First create a .env file, the information about the DB must match the information in the container, in our case, our config for setting up the database will be the following:

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

It's worth saying that the DB_HOST must be the name of the database service in the docker-compose.yml, in our case it's just mysql.

As we have a container for the composer, you can just run the following command in the terminal:

- `docker-compose run --rm composer install`

and now all the dependencies will be installed.

Now you will have to run the necessary commands related to artisan, you can run the following command to access the php container

- `docker exec -it <php_container_name> sh`

in our case:

- `docker exec -it php sh`

once you're in the container, you can run

- `php artisan key:generate`
- `php artisan migrate`
 
And now you're ready to go!!

You will be able to access the phpmyadmin service in the `localhost:8081` and access the laravel application in the `localhost:8088`. You can change these ports in the docker-compose.yml.

