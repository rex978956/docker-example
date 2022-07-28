FROM php:7.4.3-apache

# 宣告說會有 MYSQL_USER 這個參數傳進來，預設值為`user`
ARG MYSQL_USER=user
# 把容器內的環境變數 MYSQL_USER 設定為 上一行取得 MYSQL_USER 的值
ENV MYSQL_USER ${MYSQL_USER}

ARG MYSQL_PASSWORD=password
ENV MYSQL_PASSWORD ${MYSQL_PASSWORD}

ARG MYSQL_DATABASE=nisra_target
ENV MYSQL_DATABASE ${MYSQL_DATABASE}

RUN docker-php-ext-install mysqli

EXPOSE 80