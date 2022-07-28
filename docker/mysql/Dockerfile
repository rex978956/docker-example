# 宣告說會有 MYSQL_VERSION 這個參數傳進來
ARG MYSQL_VERSION 

# 使用 MYSQL_VERSION 參數來定義 MYSQL 的版本
FROM mysql:${MYSQL_VERSION}
#####################################
# Set Timezone
#####################################

# 宣告說會有 TZ 這個參數傳進來，預設值為`UTC`
ARG TZ=UTC
ENV TZ ${TZ}
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone && chown -R mysql:root /var/lib/mysql/

COPY my.cnf /etc/mysql/conf.d/my.cnf
# COPY initdb /docker-entrypoint-initdb.d

RUN chmod 0444 /etc/mysql/conf.d/my.cnf

CMD ["mysqld"]

EXPOSE 3306