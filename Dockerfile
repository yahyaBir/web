FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs \
    && npm install -g npm@latest \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Configure PHP
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && sed -i 's/memory_limit = 128M/memory_limit = 512M/g' "$PHP_INI_DIR/php.ini" \
    && sed -i 's/max_execution_time = 30/max_execution_time = 300/g' "$PHP_INI_DIR/php.ini" \
    && echo "error_reporting = E_ALL" >> "$PHP_INI_DIR/php.ini" \
    && echo "display_errors = On" >> "$PHP_INI_DIR/php.ini" \
    && echo "display_startup_errors = On" >> "$PHP_INI_DIR/php.ini"

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first
COPY composer.json composer.lock ./

# Install composer dependencies
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy package files and install npm dependencies
COPY package.json ./
RUN npm install --no-audit

# Copy the rest of the application code
COPY . .

# Build assets and cleanup
RUN npm run build && rm -rf node_modules

# Create environment file
RUN cp .env.example .env

# Set environment variables
ENV APP_ENV=production \
    APP_DEBUG=true \
    PORT=8080 \
    APP_URL=https://arsenprosess.up.railway.app \
    ASSET_URL=https://arsenprosess.up.railway.app \
    VITE_APP_URL=https://arsenprosess.up.railway.app

# Set directory permissions
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Enable Apache modules and configure
RUN a2enmod rewrite headers
COPY apache.conf /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 8080
EXPOSE 8080

# Start script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set the entrypoint
ENTRYPOINT ["docker-entrypoint.sh"] 