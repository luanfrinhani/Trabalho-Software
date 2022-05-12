#!/bin/bash
env > /var/www/app/.env
nginx
php-fpm7