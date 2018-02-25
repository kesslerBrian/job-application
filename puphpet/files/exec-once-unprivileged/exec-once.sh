composer global require friendsofphp/php-cs-fixer
composer global config bin-dir --absolute
composer global require hirak/prestissimo

cd /var/www
cp app/config/parameters.yml.vagrant app/config.parameters.yml
rm -fr html
bower install --allow-root --force --save-exact
composer install
php app/console assets:install --symlink --relative --env=local
php app/console assetic:dump --env=local
php app/console doctrine:schema:drop --force --env=local
php app/console doctrine:schema:update --force --env=local
php app/console doctrine:fixtures:load --no-interaction --env=local
