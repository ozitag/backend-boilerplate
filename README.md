For local development:

1. Configure .env files (./env ./srс/.env)

2. run `docker-compose -f docker-compose.dev.yml --project-name tager-backend up --build --force-recreate -d`

3. after first run you have to wait 3-5 mins while composer installing dependencies, after 2nd+ run you have to wait 5-10 secs

4. Wait before composer packages will be installed (you can monitor process in backend container logs)

5. Enter inside your docker container `docker exec -it CONTAINER_ID /bin/bash`

6. run `cd /var/www/app && php artisan key:generate && php artisan storage:link && php artisan passport:keys`
