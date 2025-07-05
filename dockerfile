# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg62-turbo-dev libfreetype6-dev locales zip jpegoptim optipng pngquant gifsicle vim unzip git curl libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application directory
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Generate app key (optional jika disediakan manual)
# RUN php artisan key:generate

# Set permissions
RUN chown -R www-data:www-data /var/www

EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]