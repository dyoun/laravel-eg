# Quickstart
Simple example RESTful API shamelessly modified off of the [Laravel Task List Exmaple](https://laravel.com/docs/5.2/quickstart). City and Neighborhood models use different DBs, ie, City is located in `st_cities.cities` and Neighborhood is located in `st_neighborhoods.neighborhoods`.

## Overview
Relevant files are:

Routes

- app/Http/routes.php

Controllers

- app/Http/Controllers/CitiesNeighborhoodsController.php

Models

- app/Models/City.php
- app/Models/Neighborhood.php

DB Settings
- config/database.php

## Environment Settings
```
$ export DB001_HOST=<db hostname1> \
DB001_DB=st_cities \
DB001_USER=<db user1> \
DB001_PASS=<db pass1> \
DB002_HOST=<db hostname2> \
DB002_DB=st_neighborhoods \
DB002_USER=<db user2> \
DB002_PASS=<db pass2>
```

## Setup & Start App
    $ mysql -u <user> -p<pass> -e 'create database st_cities; create database st_neighborhoods;'
    $ mysql -u <user> -p<pass> st_cities < st_cities.cities.sql
    $ mysql -u <user> -p<pass> st_neighborhoods < st_neighborhoods.neighborhoods.sql
    $ php artisan serve

## Endpoints
- http://localhost:8000/
- http://localhost:8000/cities
- http://localhost:8000/neighborhoods
- http://localhost:8000/cities/2/neighborhoods
