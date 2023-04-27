FROM debian:latest

# Services
RUN apt update && apt install -y apache2 php libapache2-mod-php php-mysql

# Outils cyber
RUN apt install -y iproute2 curl iputils-ping netcat ssh mariadb-client

RUN apt clean 

# activer les erreurs PHP
RUN sed -i -e 's/display_errors = Off/display_errors = On/g' /etc/php/7.4/apache2/php.ini
RUN sed -i -e 's/display_startup_errors = Off/display_startup_errors = On/g' /etc/php/7.4/apache2/php.ini

# Sudo rules
RUN apt install -y sudo python3
COPY ./sudo_rule /etc/sudoers.d/
RUN chmod 0400 /etc/sudoers.d/sudo_rule

# clé SSH pour machine 4
COPY ./id_ed25519 /root/.ssh/
COPY ./id_ed25519.pub /root/.ssh/
RUN chmod 600 /root/.ssh/id_ed25519
RUN chmod 600 /root/.ssh/id_ed25519.pub

# Copie du home web
RUN rm -rf /var/www/html/*
COPY www /var/www/html

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]
