#Codeception visual base
####This is a base project for codeception visual testing
It should provide webdriver ready to make tests on existing website.

To run some test:

* replace webdriver url in acceptance.suite.yml
* create an external network: docker network create proxy
* start docker compose: docker-compose up -d
* install dependencies: docker exec -it codeception_visual composer install
* write some codeception acceptance tests
* run tests docker exec -it codeception_visual php vendor/bin/codecept run