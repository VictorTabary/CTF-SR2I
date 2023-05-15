FROM debian:latest

# Services
RUN apt update && apt install -y apache2 php libapache2-mod-php php-mysql ftp openssh-server

# Outils cyber
RUN apt install -y iproute2 curl iputils-ping netcat ssh mariadb-client nmap

RUN apt clean 

# activer les erreurs PHP
RUN sed -i -e 's/display_errors = Off/display_errors = On/g' /etc/php/7.4/apache2/php.ini
RUN sed -i -e 's/display_startup_errors = Off/display_startup_errors = On/g' /etc/php/7.4/apache2/php.ini

# Sudo rules
RUN apt install -y sudo python3
COPY ./sudo_rule /etc/sudoers.d/
RUN chmod 400 /etc/sudoers.d/sudo_rule

# clé SSH pour machine 4
COPY ./id_ed25519 /root/.ssh/
COPY ./id_ed25519.pub /root/.ssh/
RUN chmod 600 /root/.ssh/id_ed25519
RUN chmod 600 /root/.ssh/id_ed25519.pub

# hash accessible en root pour la machine 5
COPY ./hash.txt /root
RUN chmod 400 /root/hash.txt

# Copie du home web
RUN rm -rf /var/www/html/*
COPY www /var/www/html

# Autoriser la connexion via à www-data
RUN echo "AllowUsers www-data" >> /etc/ssh/sshd_config
RUN echo "www-data:Machine1_pwd" | chpasswd
RUN echo "/bin/bash" | chsh www-data

# Fichier de credentials de www-data
COPY ./cr3d3nt14l5.txt /home/www-data/
RUN chown -R www-data /home/www-data/

EXPOSE 80
EXPOSE 22

CMD ["bash", "-c", "service ssh start; apache2ctl -D FOREGROUND"]
