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

- machine 5 : mettre une pyjail quand on se connecte en ssh
                il faut afficher un premier flag dès la connexion
                la jail doit bloquer les mots "import" et "open" uniquement
                il faut mettre un autre flag dans un fichier flag.txt

- toutes les machines: .bash_history
- toutes les machines: figer tous les fichiers des challenges

- ajouter les indices et les flags sur le ctfd et les machines