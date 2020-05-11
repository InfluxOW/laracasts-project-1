test:
	php artisan test
install:
	composer install
run:
	php artisan serve
lint:
	composer run-script phpcs -- --standard=PSR12 routes tests app
setup: install
	cp -n .env.example .env || true
	php artisan key:generate
	touch database/database.sqlite
	php artisan migrate
	npm install && npm run dev
seed:
	php artisan db:seed
clear:
	php artisan route:clear
	php artisan view:clear
	php artisan cache:clear
	php artisan config:clear
