# Quickstart

## Environment Settings
```
export DB001_HOST=127.0.0.1 \
DB001_DB=st_cities \
DB001_USER=root \
DB001_PASS=root \
DB002_HOST=127.0.0.1 \
DB002_DB=st_neighborhoods \
DB002_USER=root \
DB002_PASS=root
```

## Setup & Start App
    $ mysql -u <user> -p<pass> -e 'create database st_cities; create database st_neighborhoods;'
    $ mysql -u <user> -p<pass> st_cities < st_cities.cities.sql
    $ mysql -u <user> -p<pass> st_neighborhoods < st_neighborhoods.neighborhoods.sql
    $ php artisan up

## Endpoints
- http://localhost:8000/
- http://localhost:8000/cities
- http://localhost:8000/neighborhoods
- http://localhost:8000/cities/2/neighborhoods
