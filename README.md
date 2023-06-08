# PHP MVC App

The project was based on a recruitment task. The project is to create an application to communicate with the nbp api. I created a project based on the mvc pattern with simple routing

## Technology

- PHP 8.2
- Mysql 8.0

## Instalation

1. Clone repository
2. Open project, move to build folder and run docker

   ```bash
   cd docker
   docker-compose build
   docker-compose up
   ```
3. After the containers start correctly, open the phpmyadmin in browser and import sql file (php_mvc_db.sgl.zip) from main project directory to project database

   ```bash
   phpmyadmin => http://127.0.0.1:8081/
   ```

4. Run composer install in bash

   ```bash
   composer install
   ```

The application is running on port 8080

   ```bash
   http://127.0.0.1:8080/
   ```
