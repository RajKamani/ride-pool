
## About Project Setup
- Clone project In local system.
- `cd ride-pool` 
- run `composer install`
- run `npm install`  - This Will needed later.
- run `copy .env.example .env` in windows OR `cp .env.example .env` in linux. 
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
  By default, the username is root and you can leave the password field empty. (This is for Xampp)
- generate project key with running `php artisan key:generate`
- create database and name it `ride-pool`.
- run `php artisan migrate`.
- to start server `php artisan serve`.
- goto http://localhost:8000
