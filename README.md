# Projet-SR2I

https://drive.google.com/drive/folders/1vbMd7U1586c3cIHTfk9uJbc9eR6By5c6

137.194.13.87/24

user : toto

mdp : tatatoto23401

* Run

`docker-compose up --build -d`

* Stop & delete

`docker-compose down -t 0`

* State

`docker-compose ps`

* Obtenir un shell

`docker exec -it projet-sr2i_machine1_1 bash`

* Misc

`mysql -u root -p'zeajkeazelkEZJLEA' -h 10.1.0.147 -P 3306`

# ToDo

- Injection SQL pour se logger sur la première interface machine 1
- Initialiser le docker mysql avec des données (dont le flag)
- setup machine 2 : backdoor vsftpd
- privilege escalation par sudo mal config sur machine 1
- ajouter clé ssh générée sur machine1 (user root) et authorized_keys sur machine4
- machine 4 : zip à cracker avec flag dedans
- machine 5 : juste se ssh ? ptet ajouter un shell bash restreint avec shell escape ?