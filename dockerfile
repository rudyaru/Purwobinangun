FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg62-turbo-dev libfreetype6-dev locales zip jpegoptim optipng pngquant gifsicle vim unzip git curl libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --optimize-autoloader --no-dev

RUN chown -R www-data:www-data /var/www && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

ENV APP_ENV=production
ENV APP_PORT=8080

EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
