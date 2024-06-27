DOCKER_COMPOSE=docker compose

clean:
	${DOCKER_COMPOSE} down

all: clean app wait-mysql composer-install migrate

app:
	${DOCKER_COMPOSE} up -d app

phpmyadmin:
	${DOCKER_COMPOSE} up -d phpmyadmin

migrate:
	${DOCKER_COMPOSE} run --rm artisan migrate:fresh --seed

seed:
	${DOCKER_COMPOSE} run --rm artisan db:seed --class=CustomerSeeder
	${DOCKER_COMPOSE} run --rm artisan db:seed --class=OrderSeeder
	${DOCKER_COMPOSE} run --rm artisan db:seed --class=ServiceSeeder
	${DOCKER_COMPOSE} run --rm artisan db:seed --class=ItemSeeder
	${DOCKER_COMPOSE} run --rm artisan db:seed --class=PaymentSeeder
	${DOCKER_COMPOSE} run --rm artisan db:seed --class=ServicePriceSeeder

wait-mysql:
	sleep 10

composer-install:
	docker compose run composer install
