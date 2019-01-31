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
	docker-compose.exe run ${container} composer require

require-dev:
	docker-compose.exe run ${container} composer require --dev

run:
	docker-compose.exe run ${container} php index.php

jumpin:
	docker-compose.exe run ${container} bash

test:
	docker-compose.exe run ${container} ./vendor/bin/phpunit ./tests/

test-file:
	docker-compose.exe run ${container} ./vendor/bin/phpunit ./tests/ --group $(FILE)

stan:
	docker-compose.exe run ${container} ./vendor/bin/phpstan analyse $(FILE) --level 7

cs-fixer:
	docker-compose.exe run ${container} ./vendor/bin/php-cs-fixer fix $(FILE)

tail-logs:
	docker-compose.exe logs -f ${container}