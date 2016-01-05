FROM ubuntu:14.04.3
MAINTAINER Alexander Miehe <alexander.miehe@gmail.com>
ENV PHP_VERSION 5.6.16
WORKDIR /tmp
RUN echo "deb http://ppa.launchpad.net/ondrej/php5-5.6/ubuntu trusty main" >> /etc/apt/sources.list \
    && echo "deb-src http://ppa.launchpad.net/ondrej/php5-5.6/ubuntu trusty main " >> /etc/apt/sources.list \
    && apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E5267A6C \
    && apt-get update \
    && apt-get install -y curl php5-fpm git php5-intl php5-curl

ADD php.ini /etc/php5/cli/conf.d/99-custom.ini
ADD php.ini /etc/php5/fpm/conf.d/99-custom.ini
ADD www.conf /etc/php5/fpm/pool.d/www.conf

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /srv/www/app

EXPOSE 9000

CMD ["php5-fpm", "-F"]
