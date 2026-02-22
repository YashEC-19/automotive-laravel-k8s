#!/bin/bash

# Create SQLite database
touch /var/www/database/database.sqlite

# Run migrations
php artisan migrate --force

# Link storage
php artisan storage:link --force

# Cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Start PHP-FPM in background
php-fpm &

# Start Nginx in foreground
nginx -g "daemon off;"
