FROM php:7

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

WORKDIR /app/lumen-hello

COPY . /app/lumen-hello

RUN composer install

EXPOSE 3030
CMD ["php", "-S", "0.0.0.0:3030", "-t", "public"]