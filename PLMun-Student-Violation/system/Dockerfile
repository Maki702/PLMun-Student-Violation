
FROM php:8.3-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

RUN echo "output_buffering = On" > /usr/local/etc/php/conf.d/output-buffering.ini

# Copy project files
COPY . /var/www/html/

# Set the main PHP page
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
