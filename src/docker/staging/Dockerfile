FROM 084824215901.dkr.ecr.us-east-1.amazonaws.com/docker-nginx-php72

COPY . /var/www/app
COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN chown -R :www-data /var/www/app && \
    chmod -R 750 /var/www/app  && \
    chmod g+s /var/www/app && \
    chmod -R 777 /var/www/app/storage && \
    chmod -R 777 /var/www/app/bootstrap/cache && \
    chmod +x /var/www/app/docker/entrypoint.sh

WORKDIR /var/www/app

RUN composer install && \
     apk add npm && \
     npm install && \
     npm run dev && \
     chown -R :www-data /var/www/app && \
     chmod -R 777 /var/www/app/public

ENTRYPOINT ["/var/www/app/docker/entrypoint.sh"]
