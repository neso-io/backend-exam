# backend-test

## Setup
* Install dependencies
  * composer install
* Install laradock
  * git clone https://github.com/Laradock/laradock.git
* cd into laradock (directory made after cloning)
  * create .env file
  * copy contents of the env-example file into the .env file you created

## Run server
* cd into laradock
* sudo docker-compose up nginx mysql (first time running this will take a while)
___If you get an error because the port is being used, run this command "fuser -k portNum/tcp" where portNum is the port that is being used___
## Create endpoints (more info in routes/api.php file)
* Create an API endpoint that will add/subtract/multiply/divide two numbers
* Create an API endpoint that will only return odd or even numbers
* Create an API endpoint that will create a file with your name in it

## Notes:
__All api endpoints can be accessed buy going to localhost/api/__ (For example going to localhost/api/health will return the api servers health)