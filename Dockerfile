# Step 1: Use an official PHP image with Apache
FROM php:8.2-apache

# Step 2: Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    zlib1g-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip bcmath

# Step 3: Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Check if Composer is installed correctly
RUN composer --version

# Step 4: Set working directory
WORKDIR /var/www/html

# Step 5: Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --verbose

# Step 6: Copy Laravel application files
COPY . .

# Step 7: Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Step 8: Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Step 9: Expose port
EXPOSE 80

# Step 10: Start the Apache server
CMD ["apache2-foreground"]
