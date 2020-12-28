
#test git push keys

#DOCTRINE DB
console doctrine:database:create
console doctrine:schema:create
console doctrine:fixtures:load
console make:migration
console doctrine:migrations:migrate
console doctrine:fixtures:load -n


#assets
yarn install
yarn encore dev
symfony run -d yarn encore dev --watch

#test
symfony php bin/phpunit

#deploy
composer dump-env prod
console cache:clear --env=prod
console cache:warmup --env=prod
https://medium.com/@runawaycoin/deploying-symfony-4-application-to-shared-hosting-with-just-ftp-access-e65d2c5e0e3d
SET APP_ENV=prod
composer install --no-dev --optimize-autoloader
composer dump-autoload --optimize --no-dev --classmap-authoritative
node_modules\.bin\encore production

