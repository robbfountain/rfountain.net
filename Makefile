deploy:
	composer install --prefer-dist --optimize-autoloader --no-dev
	php artisan config:clear
	mv .env .env.local
	serverless deploy
