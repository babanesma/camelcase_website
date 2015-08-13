
composer install;
./vendor/bin/drush sql-drop --yes;
latestDbFile=$(ls ./sql -t1 | grep wego | head -n 1);
./vendor/bin/drush sql-cli < ./sql/$latestDbFile ;
./vendor/bin/drush cache-clear all ;