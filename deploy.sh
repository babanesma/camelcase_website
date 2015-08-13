
drush sql-drop --yes;
latestDbFile=$(ls ./sql -t1 | grep wego | head -n 1);
drush sql-cli < ./sql/$latestDbFile ;
drush cache-clear all ;