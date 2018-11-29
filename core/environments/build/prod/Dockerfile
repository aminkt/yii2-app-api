FROM poshtiban/php-fpm

ARG github_access_token
ENV github_access_token=${github_access_token} 

WORKDIR /app
COPY . /app

RUN composer config --global --auth github-oauth.github.com $github_access_token
RUN composer update
RUN php core/init --env=Production --overwrite=y