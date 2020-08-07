deploy:
	composer install --prefer-dist --optimize-autoloader --no-dev
	npm run prod
	aws s3 sync public/ s3://rfountain.net --delete --exclude index.php
	php artisan config:clear
	serverless deploy
