cd /var/www
bower install --force --save-exact
sudo -u www-data php app/console assets:install --symlink --relative --env=local
sudo -u www-data php app/console assetic:dump --env=local