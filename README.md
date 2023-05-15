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

- machine 1 : ajouter les creds pour se co en ssh directement, installer ssh et exposer le port
- machine 5 : ptet ajouter un shell bash restreint avec jail escape ? (Pyjail?)

- toutes les machines: .bash_history
- toutes les machines: figer tous les fichiers des challenges

- faire la page de validation des flags