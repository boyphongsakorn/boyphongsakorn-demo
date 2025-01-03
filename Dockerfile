# Use the official PHP image from Docker Hub with Apache
FROM php:8.2-apache

# Copy the application source code to the container
COPY . /var/www/html

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite (if your app needs it)
RUN a2enmod rewrite

# Set proper permissions for the web root
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose the default web server port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]