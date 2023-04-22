# Projet-SR2I

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

docker network create --subnet=10.53.0.0/24 projet-sr2i-subnet