FROM ubuntu:latest

RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    php-mysql \
    && apt-get clean

COPY index.php /var/www/html/index.php

CMD ["apache2ctl", "-D", "FOREGROUND"]
