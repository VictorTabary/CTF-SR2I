FROM debian:latest

# Services
RUN apt update && apt install -y apache2 php libapache2-mod-php php-mysql ftp openssh-server gcc

# Outils cyber
RUN apt install -y iproute2 curl iputils-ping netcat ssh mariadb-client nmap

RUN apt clean 

# activer les erreurs PHP
RUN sed -i -e 's/display_errors = Off/display_errors = On/g' /etc/php/7.4/apache2/php.ini
RUN sed -i -e 's/display_startup_errors = Off/display_startup_errors = On/g' /etc/php/7.4/apache2/php.ini

# Sudo rules
RUN apt install -y sudo python3

# Nettoyage du home web
RUN rm -rf /var/www/html/*

# flag pour "Obtenir un shell"
COPY ./bash2.c .
RUN gcc -o /bin/bash2 bash2.c
RUN rm bash2.c

# Autoriser la connexion via à www-data
RUN echo "AllowUsers www-data" >> /etc/ssh/sshd_config
RUN echo "www-data:Machine1_passwd" | chpasswd
RUN echo "/bin/bash2" | chsh www-data

EXPOSE 80
EXPOSE 22

CMD ["bash", "-c", "service ssh start; apache2ctl -D FOREGROUND"]
