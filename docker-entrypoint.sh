#!/bin/bash
set -e

# Wait for the database to be ready
echo "Waiting for database connection..."
while ! php artisan db:monitor 2>/dev/null; do
    sleep 1
done

# Generate application key if not set
php artisan key:generate --force

# Clear and cache configuration
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Create storage link
php artisan storage:link

# Fix permissions
chown -R www-data:www-data /var/www/html/storage
chmod -R 755 /var/www/html/storage

# Start Apache
apache2-foreground 