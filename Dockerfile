FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade

RUN apt-get -y install wget
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y install php7.3 php-mysql php-fpm
RUN apt-get -y install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
RUN apt-get -y install vim

RUN mkdir /var/www/cquiana

#phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
RUN tar -xvzf phpMyAdmin-5.0.2-english.tar.gz && mv phpMyAdmin-5.0.2-english /var/www/cquiana/phpMyAdmin
RUN rm -rf phpMyAdmin-5.0.2-english.tar.gz
COPY ./srcs/config.inc.php /var/www/cquiana/phpMyAdmin/phpMyAdmin-5.0.2-english

#WordPress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz && mv wordpress /var/www/cquiana
RUN rm -rf latest.tar.gz
COPY ./srcs/wp-config.php /var/www/cquiana/wordpress

#SSL
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/certs/selfsigned.key \
	-out /etc/ssl/certs/selfsigned.crt \
	-subj '/C=RU/ST=Moscow/L=Moscow/O=21school/OU=no/CN=cquiana/'

#nginx
COPY ./srcs/nginx.conf /etc/nginx/sites-available/
RUN rm /etc/nginx/sites-enabled/default
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/

RUN chown -R www-data:www-data /var/www/cquiana
RUN chmod -R 755 /var/www/cquiana

COPY ./srcs/script_sql .
COPY ./srcs/start_script.sh .
COPY ./srcs/autoindex.sh .

EXPOSE 80 443

ENTRYPOINT bash start_script.sh
