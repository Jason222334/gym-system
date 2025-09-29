FROM php:8.2-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev

# Limpiar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Configurar el DocumentRoot de Apache para Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Configurar permisos para .htaccess - FORMA CORRECTA
RUN echo '<Directory /var/www/html/public>' > /etc/apache2/conf-available/laravel.conf
RUN echo '    Options Indexes FollowSymLinks' >> /etc/apache2/conf-available/laravel.conf
RUN echo '    AllowOverride All' >> /etc/apache2/conf-available/laravel.conf
RUN echo '    Require all granted' >> /etc/apache2/conf-available/laravel.conf
RUN echo '</Directory>' >> /etc/apache2/conf-available/laravel.conf
RUN a2enconf laravel.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la aplicación
WORKDIR /var/www/html

# Copiar archivos de la aplicación
COPY . .

# Instalar dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Dar permisos
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache

# Crear script de inicio simple
RUN echo '#!/bin/bash' > /usr/local/bin/start.sh
RUN echo 'set -e' >> /usr/local/bin/start.sh
RUN echo 'php artisan migrate --force' >> /usr/local/bin/start.sh
RUN echo 'php artisan db:seed --force' >> /usr/local/bin/start.sh
RUN echo 'php artisan config:cache' >> /usr/local/bin/start.sh
RUN echo 'php artisan route:cache' >> /usr/local/bin/start.sh
RUN echo 'php artisan view:cache' >> /usr/local/bin/start.sh
RUN echo 'exec apache2-foreground' >> /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Puerto expuesto
EXPOSE 80

# Comando de inicio
CMD ["/usr/local/bin/start.sh"]