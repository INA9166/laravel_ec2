FROM --platform=linux/x86_64 php:8.2.4-fpm-bullseye

ENV TZ Asia/Tokyo

COPY ./docker/local/app/php.ini /usr/local/etc/php/php.ini
COPY ./docker/local/app/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# 作業ディレクトリを変更    
WORKDIR /var/www/src

RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
default-mysql-client \
libpng-dev \
libfreetype6-dev \
libjpeg62-turbo-dev \
&& rm -rf /var/lib/apt/lists/* \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install -j$(nproc) gd \
&& docker-php-ext-install pdo_mysql

RUN git clone --depth 1 https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis && docker-php-ext-install redis
RUN rm -rf /usr/src/php/ext/redis/.git

RUN groupadd -r appgroup && useradd -r -g appgroup appuser

RUN chmod u-s /usr/bin/newgrp && \
chmod u-s /usr/bin/passwd && \
chmod u-s /usr/bin/gpasswd && \
chmod u-s /bin/mount && \
chmod u-s /bin/umount && \
chmod u-s /bin/su && \
chmod u-s /usr/bin/chfn && \
chmod u-s /usr/bin/chsh && \
chmod u-s /usr/lib/openssh/ssh-keysign && \
chmod g-s /usr/bin/chage && \
chmod g-s /usr/bin/wall && \
chmod g-s /sbin/unix_chkpwd && \
chmod g-s /usr/bin/expiry && \
chmod g-s /usr/bin/ssh-agent

USER appuser
