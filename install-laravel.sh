#!/bin/bash

echo "Building Docker containers..."
docker compose build

echo "Starting containers..."
docker compose up -d

echo "Waiting for containers to be ready..."
sleep 10

echo "Installing Laravel..."
docker compose exec app composer create-project laravel/laravel . --prefer-dist

echo "Setting permissions..."
docker compose exec app chown -R kaely:www-data /var/www
docker compose exec app chmod -R 755 /var/www
docker compose exec app chmod -R 775 /var/www/storage
docker compose exec app chmod -R 775 /var/www/bootstrap/cache

echo "Creating .env file..."
docker compose exec app cp .env.example .env

echo "Generating application key..."
docker compose exec app php artisan key:generate

echo "Configuring database..."
docker compose exec app sed -i 's/DB_HOST=127.0.0.1/DB_HOST=db/' .env
docker compose exec app sed -i 's/DB_DATABASE=laravel/DB_DATABASE=admincentral/' .env
docker compose exec app sed -i 's/DB_USERNAME=root/DB_USERNAME=laravel/' .env
docker compose exec app sed -i 's/DB_PASSWORD=/DB_PASSWORD=password/' .env

echo "Running migrations..."
sleep 5
docker compose exec app php artisan migrate

echo ""
echo "🎉 Laravel AdminCentral has been installed successfully!"
echo ""
echo "You can access your application at:"
echo "- Laravel App: http://localhost:8000"
echo "- phpMyAdmin: http://localhost:8080"
echo ""
echo "Database credentials:"
echo "- Host: localhost:3306"
echo "- Database: admincentral"
echo "- Username: laravel"
echo "- Password: password"
echo ""