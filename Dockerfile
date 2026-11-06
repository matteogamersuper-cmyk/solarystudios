FROM trafex/php-nginx:latest

WORKDIR /var/www/html

COPY . /var/www/html

EXPOSE 8080
