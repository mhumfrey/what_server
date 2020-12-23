FROM debian:buster

RUN apt-get update &&\
    apt-get upgrade && \
    apt-get install -y \
    nginx \
    mariadb-server \
    php-fpm php-mysql php-mbstring \
    wget \
	vim

WORKDIR /var/www/

RUN	wget  https://wordpress.org/latest.tar.gz && \
    tar -xvf latest.tar.gz && \
    rm -rf latest.tar.gz &&\
	wget  https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz && \
    tar -xvf phpMyAdmin-5.0.4-all-languages.tar.gz && \
    rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz

WORKDIR /etc/nginx/ssl/

RUN	openssl req -newkey rsa:4096 \
            -x509 \
            -sha256 \
            -days 30 \
            -nodes \
            -out ssl_cert.crt \
            -keyout ssl_key.key \
            -subj "/C=RU/ST=Moscow State/L=Moscow/O=Unilab/OU=It Security/CN=localhost"

WORKDIR /

COPY srcs/nginx.conf /etc/nginx/sites-available/
COPY srcs/config.inc.php /var/www/phpMyAdmin-5.0.4-all-languages/
COPY srcs/wp-config.php /var/www/wordpress/
COPY srcs/new_db.sql /etc/nginx/sql/
COPY srcs/run_serv.sh /

RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/

CMD bash run_serv.sh