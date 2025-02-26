#!/bin/bash
set -ex

echo "Starting entrypoint script..."

# Check environment variables
echo "Checking environment variables..."
printenv

# Check disk space and directory structure
echo "Checking disk space..."
df -h
echo "Checking directory structure..."
ls -la /var/www/html/
ls -la /var/www/html/public/
ls -la /var/www/html/storage/

# Check PHP version and modules
echo "PHP Version:"
php -v
echo "PHP Modules:"
php -m

# Check Laravel logs
echo "Creating Laravel log file if not exists..."
touch storage/logs/laravel.log
echo "Recent Laravel logs:"
tail -n 50 storage/logs/laravel.log || true

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

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
    php artisan storage:link || true
fi

# Fix permissions
echo "Setting permissions..."
chown -R www-data:www-data /var/www/html/storage
chmod -R 755 /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chmod -R 755 /var/www/html/bootstrap/cache

# Verify Vite build
echo "Checking Vite build..."
ls -la public/build/ || true
cat public/build/manifest.json || echo "No manifest file found"

# Create log directory if it doesn't exist
mkdir -p /var/log/apache2
touch /var/log/apache2/error.log
touch /var/log/apache2/access.log
chown -R www-data:www-data /var/log/apache2

# Check Apache configuration
echo "Checking Apache configuration..."
apache2ctl -t

# Start Apache
echo "Starting Apache on port 8080..."
exec apache2-foreground 