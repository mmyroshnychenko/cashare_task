**For starting docker:**

cd docker

docker-compose up -d --build

**Exec migrations**

from root directory:

docker-compose -f ./docker/docker-compose.yml exec -u www-data php-fpm bin/console doctrine:migrations:migrate

**Documentation**

http://localhost:888/


