deploy:
	composer install --prefer-dist --optimize-autoloader --no-dev
	npm run prod
	aws s3 sync public/ s3://assets.rfountain.net --delete --exclude index.php
	php artisan cache:clear
	php artisan view:clear
	php artisan config:clear
	serverless deploy

develop:
	composer install --prefer-dist --optimize-autoloader
	npm run dev
