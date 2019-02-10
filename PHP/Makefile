container=website

up:
	docker-compose.exe up -d

build:
	docker-compose.exe rm -vsf
	docker-compose.exe down -v --remove-orphans
	docker-compose.exe build
	docker-compose.exe up -d

down:
	docker-compose.exe down

cont:
	docker.exe container ls

require:
	docker-compose.exe exec ${container} composer require

install:
	docker-compose.exe exec -T ${container} composer install

pwd:
	docker-compose.exe exec -T ${container} pwd

require-dev:
	docker-compose.exe exec ${container} composer require --dev

run:
	docker-compose.exe exec ${container} php index.php

jumpin:
	docker-compose.exe exec -T ${container} bash

test:
	docker-compose.exe exec ${container} ./vendor/bin/phpunit ./tests/

test-file:
	docker-compose.exe exec ${container} ./vendor/bin/phpunit ./tests/ --group $(FILE)

stan:
	docker-compose.exe exec ${container} ./vendor/bin/phpstan analyse $(FILE) --level 7

cs-fixer:
	docker-compose.exe exec ${container} ./vendor/bin/php-cs-fixer fix $(FILE)

tail-logs:
	docker-compose.exe logs -f ${container}