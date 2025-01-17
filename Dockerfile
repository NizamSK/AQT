# Step 1: Use an official PHP image with Apache
FROM php:8.2-apache

# Step 2: Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip bcmath

# Step 3: Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Step 4: Set working directory
WORKDIR /var/www/html

# Step 5: Copy Laravel application files
COPY . .

# Step 6: Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Step 7: Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Step 8: Expose port
EXPOSE 80

# Step 9: Start the Apache server
CMD ["apache2-foreground"]
