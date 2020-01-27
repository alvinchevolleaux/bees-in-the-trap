FROM php:7.4-cli

RUN apt-get -y update && \
    apt-get -y install unzip git

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/bin/composer

COPY . /usr/src/app

WORKDIR /usr/src/app

#ENTRYPOINT ["php", "bin/app.php" ]