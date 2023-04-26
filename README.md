# Projet-SR2I

https://drive.google.com/drive/folders/1vbMd7U1586c3cIHTfk9uJbc9eR6By5c6

137.194.13.87/24

user : toto

mdp : tatatoto23401

* Run

`docker-compose up --build -d`

* Rebuild juste une machine
  
`docker-compose up -d --no-deps --build machine1`

* Stop & delete

`docker-compose down -t 0`

* State

`docker-compose ps`

* Obtenir un shell

`docker compose exec -it machine1 bash`

* Misc

`mysql -u root -p'zeajkeazelkEZJLEA' -h 10.1.0.147 -P 3306`

# ToDo

- machine 1 : formulaire de login avec faille injection SQL
- machine 1 : une fois connecté, accès à la RCE
- machine 2 : remplir la bdd (user/mdp)
- machine 3 : backdoor vsftpd + dossier ftp public (2 challenges)
- machine 4 : zip à cracker avec flag dedans
- machine 5 : juste se ssh ? ptet ajouter un shell bash restreint avec jail escape ?