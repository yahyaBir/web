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

# Check Laravel logs
echo "Checking Laravel logs..."
tail -n 50 storage/logs/laravel.log || true

# Check storage directory structure
echo "Checking storage directory structure..."
tree storage/ || ls -R storage/

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
php artisan config:cache || (echo "Config cache failed" && php artisan config:clear && cat storage/logs/laravel.log)
php artisan route:cache || (echo "Route cache failed" && php artisan route:clear && cat storage/logs/laravel.log)
php artisan view:cache || (echo "View cache failed" && php artisan view:clear && cat storage/logs/laravel.log)

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
apache2ctl -t -D DUMP_MODULES
apache2ctl -S

# Check Apache logs
echo "Checking Apache error log..."
tail -n 50 /var/log/apache2/error.log || true
echo "Checking Apache access log..."
tail -n 50 /var/log/apache2/access.log || true

# Start Apache with debug output
echo "Starting Apache..."
exec apache2-foreground -e debug 