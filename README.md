## installation
cp .env.example .env
cp docker-compose.local.yml docker-compose.yml

docker-compose up -d

## first run
docker exec -ti employee-goal-rates-api-php php artisan db:seed

## example
docker exec -ti employee-goal-rates-api-php php artisan test --filter EmployeeGoalRateTest::test_store

[//]: # (testowanie walidacji: zmien w tescie wartosci w tabeli $input \tests\Feature\Employees\EmployeeGoalRateTest.php)


