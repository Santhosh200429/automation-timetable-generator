# Use the official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy all files to the container
COPY . /var/www/html/

# Enable required Apache modules
RUN docker-php-ext-install mysqli pdo pdo_mysql && a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
