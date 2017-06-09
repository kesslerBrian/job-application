alias gotowww='cd /var/www'

alias composer-install='gotowww && composer install'
alias composer-update='gotowww && composer update'
alias bower-install='gotowww && bower install --force --save-exact'

alias cache-clear='gotowww && php app/console cache:clear'
alias cache-clear-force='gotowww && rm -fr app/cache/* && php app/console cache:warmup'

alias assets-install='gotowww && php app/console assets:install --symlink --relative'

alias assetic-dump='gotowww && php app/console assetic:dump'
alias assetic-watch='gotowww && php app/console assetic:watch'

alias entities-generate='gotowww && php app/console doctrine:generate:entities AppBundle --no-backup'

alias database-drop='gotowww && php app/console doctrine:schema:drop --force'
alias database-create='gotowww && php app/console doctrine:schema:create'
alias database-sql='gotowww && php app/console doctrine:schema:create --dump-sql'
alias database-update='gotowww && php app/console doctrine:schema:update --force'
alias database-fixtures='gotowww && php app/console doctrine:fixtures:load --no-interaction'
alias database-init='database-drop && database-update && database-fixtures'

alias migration-generate='gotowww && php app/console doctrine:migrations:diff'
alias migration-migrate='gotowww && php app/console doctrine:migrations:migrate'

alias translation-extract-all='translation-extract-fr && translation-extract-en'
alias translation-extract-fr='gotowww && php app/console translation:update fr --output-format=php --force'
alias translation-extract-en='gotowww && php app/console translation:update en --output-format=php --force'

alias translations-extract='gotowww && php app/console translation:extract fr --config=app'