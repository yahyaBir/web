#!/bin/bash
set -ex

echo "Starting entrypoint script..."

# Check environment variables
echo "Checking environment variables..."
env

# Check PHP version and modules
echo "PHP Version:"
php -v
echo "PHP Modules:"
php -m

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

# Check storage directory permissions
echo "Checking storage permissions..."
ls -la storage/
ls -la storage/framework/

# Clear all caches
echo "Clearing caches..."
php artisan optimize:clear

# Cache configuration
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if it doesn't exist
if [ ! -L public/storage ]; then
    echo "Creating storage link..."
    php artisan storage:link
fi

# Fix permissions
echo "Setting permissions..."
chown -R www-data:www-data /var/www/html/storage
chmod -R 755 /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chmod -R 755 /var/www/html/bootstrap/cache

# Check Apache configuration
echo "Checking Apache configuration..."
apache2ctl -t

# Start Apache
echo "Starting Apache..."
exec apache2-foreground 