serve:
	php artisan serve

infra-up: infra-down
	@echo "## Starting Up Infrastructures"
	@$(MAKE) run-mysql
	@docker ps --filter "name=larapizza"

run-mysql:
	@echo "## Running larapizza-mysql"
	@docker run --rm -d -e MYSQL_DATABASE=pizzahouse -e MYSQL_ALLOW_EMPTY_PASSWORD=1 --name larapizza-mysql -p 3344:3306 --env-file .env mysql:5.7

infra-down:
	@echo "## Shutting Down Infrastructures"
	@-docker kill larapizza-mysql
