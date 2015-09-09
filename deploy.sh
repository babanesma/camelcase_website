
composer install;
./vendor/bin/drush sql-drop --yes;
latestDbFile=$(ls -r -1 ./sql/wego_*.sql | head -n 1);
./vendor/bin/drush sql-cli < $latestDbFile ;
./vendor/bin/drush cache-clear all ;