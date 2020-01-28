# Bees in the Trap

Alvin Chevolleaux <alvin@chevolleaux.com>

# Running

1. `composer install`
2. `./beesinthetrap`

Add the --auto flag to run the game without waiting for user input i.e. `./beesinthetrap --auto`

## Running with Docker / Docker Compose

### Docker Compose to build the image and run it in auto mode

1. `cp docker-compose.yml.dist docker-compose.yml`
2. `docker-compose up`

You may take the built image and run the image (assuming Docker is installed) using a command similar to:

`docker run -it -u $UID -e COMPOSER_HOME=/usr/src/app/.composer --network host bees-in-the-trap_php bash`

Changing out the image name for whatever your name you have built it under. You can find this using `docker images`

## Running Test Suite

`./vendor/bin/phpunit`