
/usr/local/bin/drush sql-drop --yes;
latestDbFile=$(ls ./sql -t1 | grep wego | head -n 1);
/usr/local/bin/drush sql-cli < ./sql/$latestDbFile ;
/usr/local/bin/drush cache-clear all ;