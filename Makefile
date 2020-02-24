vendor: composer.lock
	composer-install

composer-install: composer.json
	docker exec juinsa_shop_web composer install
