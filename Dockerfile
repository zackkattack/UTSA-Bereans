FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y apache2 \
    php \
    php-bcmath \
    php-bz2 \
    php-intl \
    php-gd \
    php-mbstring \
    php-mysql \
    php-zip \
    libapache2-mod-php


COPY * /var/www/html/
WORKDIR /var/www/html

CMD ["apachectl","-D","FOREGROUND"]
EXPOSE 80
EXPOSE 443