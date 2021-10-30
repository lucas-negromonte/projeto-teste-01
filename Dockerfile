FROM php:7.3-apache

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql 

COPY ./entrypoint.sh /entrypoint.sh

COPY ./ /var/www/html

RUN chmod +x /entrypoint.sh

ENTRYPOINT [ "/entrypoint.sh" ]
