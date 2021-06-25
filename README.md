### docker-compose for pictshare

pictshare: https://github.com/HaschekSolutions/pictshare

the original docker-compose.yml will always update and replace the config.inc.php
so anything you update in config.inc.php will not work.
but I need to modify the config to use my own hostname 
so I modify the docker-compose.yml to include the config.inc.php file and also the expose port.


