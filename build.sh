#!/bin/bash

# Instalar dependencias de Composer
composer install --no-dev --optimize-autoloader

# Generar key de aplicación si no existe
php artisan key:generate

# Optimizar la aplicación
php artisan config:cache
php artisan route:cache
php artisan view:cache

# En Render, los permisos se manejan automáticamente
# No necesitamos comandos chmod en Windows