FROM php:8.2-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        && docker-php-ext-install \
		mysqli \
        pdo pdo_mysql

COPY task/ /var/www/html

CMD ["php-fpm"]

WORKDIR /var/www/html/
