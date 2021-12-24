# Online Library

This is a little project developed using Symfony 5.3 and MySQL database.
The focus of this project is being able to login, create books, assign authors and use an API to shows the current weather.

## Requisitos | Requirements

- Docker, docker-compose.

## Installation

In order to install this project follow the steps:

### 1. Install and activate the container
Open your terminal and type:

```
docker compose build && docker compose up -d

```

Wait for the commands to run.

### 2. Install the packages with composer

Enter the PHP container and type the following:

```
docker exec -it php bash
```
In case you are using Windows use this command:
```
winpty docker exec -it php bash
```

When inside the container, use the following command: 
```
composer install
```

Wait for the installation to complete.

### 3. Execute the migrations
In order to create database tables you need to execute the following command from PHP container:

```
symfony console doctrine:migrations:migrate
```

## Using the application
After the installation you can access the project by the URL http://localhost:8080, default user is admin 123456.
