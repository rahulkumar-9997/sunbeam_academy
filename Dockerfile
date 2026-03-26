FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    unzip \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader \
    && php artisan key:generate \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

COPY docker/nginx.conf /etc/nginx/sites-enabled/default

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 80

CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]