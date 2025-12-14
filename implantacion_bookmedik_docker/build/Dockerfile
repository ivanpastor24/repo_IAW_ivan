FROM php:8.4-apache
RUN apt-get update && apt-get install -y mariadb-client
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY bookmedik /var/www/html/
EXPOSE 80
ENV DB_USER bookmedik
ENV DB_PASS bookmedik
ENV DB_NAME bookmedik
ENV DB_HOST mariadb
COPY script.sh /usr/local/bin/script.sh
COPY schema.sql /opt
RUN chmod +x /usr/local/bin/script.sh
CMD /usr/local/bin/script.sh
