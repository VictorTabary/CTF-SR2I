#!/bin/sh
chattr +i /var/www/root_flag.txt /home/www-data/cr3d3nt14l5.txt /var/www/html/flag.txt /root/hash.txt /root/.ssh/id_ed25519 /root/.ssh/id_ed25519.pub /etc/sudoers.d/sudo_rule;
service ssh start;
apache2ctl -D FOREGROUND;
rm entrypoint.sh