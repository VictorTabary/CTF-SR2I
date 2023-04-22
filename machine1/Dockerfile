FROM debian

RUN apt update

# Services
RUN apt install -y apache2 php libapache2-mod-php php-mysql

# Outils cyber
RUN apt install -y iproute2 curl iputils-ping netcat ssh mariadb-client

RUN apt clean 

# Copie du home web
RUN rm -rf /var/www/html/*
COPY www /var/www/html

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]
