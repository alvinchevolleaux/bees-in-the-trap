# Bees in the Trap

Alvin Chevolleaux <alvin@chevolleaux.com>

# Running

1. `composer install`
2. `./beesinthetrap`

Add the --auto flag to run the game without waiting for user input i.e. `./beesinthetrap --auto`

## Running with Docker Compose

1. `cp docker-compose.yml.dist docker-compose.yml`
2. `docker-compose up`

## Running Test Suite

`./vendor/bin/phpunit`