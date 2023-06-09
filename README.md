# CTF SR2I

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

