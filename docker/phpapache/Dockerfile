FROM php:7.4.3-apache

ARG MYSQL_USER=user
ENV MYSQL_USER ${MYSQL_USER}
ARG MYSQL_PASSWORD=password
ENV MYSQL_PASSWORD ${MYSQL_PASSWORD}
ARG MYSQL_DATABASE=nisra_target
ENV MYSQL_DATABASE ${MYSQL_DATABASE}

# COPY nisra-target-drone/website/ /var/www/html/

RUN docker-php-ext-install mysqli
EXPOSE 80