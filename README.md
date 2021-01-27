# pckg/skeleton
A clean start for every pckg project.

![Build status](https://github.com/pckg/skeleton/workflows/Pckg%20Skeleton%20CI/badge.svg)

# Prepare
`$docker run \
-v /www/schtr4jh/comms-auth/:/var/www/html \
-i -p 8072:443 \
--cap-add=NET_ADMIN \
--device /dev/net/tun:/dev/net/tun \
-t schtr4jh/pckg:latest \
--restart=always /bin/bash`

# Install
`$ composer create-project pckg/skeleton . -s dev --prefer-dist`

# Console
`$ php console`

Available commands:\
  help              Displays help for a command  list              Lists commands\
 app\
  **app:create**        Create new application\
 cache\
  **cache:clear**       Clear cache\
 migrator\
  **migrator:install**  Install migrations from envirtonment\
  
# Create new application
Create a directory structure for new application (src, config, public).\

`$ php console app:create`

# Init the application
Create static storage directories for the application (storage, cache, tmp).\

`$ php console project:init`

# Access the application
Open in web browser.\

`https://localhost:8072/`

# Test the application
Runs mocha + codeception tests.\

`$ php console project:test`

# Support
http://pckg.foobar.si/