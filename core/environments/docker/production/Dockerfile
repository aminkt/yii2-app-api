FROM aminkt/yii2-docker:7.2-nginx

MAINTAINER Amin Keshavarz <ak_1596@yahoo.com>

WORKDIR /app

COPY composer.lock composer.json /app/

RUN composer --no-scripts --no-dev --prefer-dist install &&\
    composer clear-cache

# Copy the current directory contents into the container at /app
COPY . /app

ENTRYPOINT service php7.2-fpm start && service nginx start && php core/init --env=Production --overwrite=y && /bin/bash