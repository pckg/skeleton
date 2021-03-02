# pckg/skeleton

A clean start for every pckg project.

![Build status](https://github.com/pckg/skeleton/workflows/Pckg%20Skeleton%20CI/badge.svg)

# Features
 - PHP 7.4 Framework with ORM, Migrations, Auth, Queue and I18n modules on the backend - [pckg](https://github.com/pckg)
 - Webpack with VueJS ecosystem integration on the frontend - [pckg-app/frontend](https://github.com/pckg-app/frontend) and [pckg-app/frontend-dev](https://github.com/pckg-app/frontend-dev)
 - Plug'n'play Docker images for Dev and Prod environments - [pckg/docker-images](https://github.com/pckg/docker-images)
 - CI & CD pipelines (Github Workflows)
 - PHP Cloc, Stan, CS, Codeception and Mocha

# Dev environment
The whole dev environment with system dependencies and some services is available in `schtr4jh/pckg:latest` Docker image.
```
$ docker run \
-v $PWD:/var/www/html \
-i -p 8072:443 \
-t schtr4jh/pckg:latest \
--restart=always /bin/bash
```

_See [pckg/docker-images](https://github.com/pckg/docker-images) for more info on configuration, parameters and services._

# Install

`$ composer create-project pckg/skeleton . -s dev --prefer-dist`

# Console

`$ php console`

Available commands:
```
help Displays help for a command list Lists commands\
app\
**app:create**        Create new application\
cache\
**cache:clear**       Clear cache\
migrator\
**migrator:install**  Install migrations from envirtonment\
```
# Create new application

Create a directory structure for new application.

`$ php console app:create`

Answer to some questions and create a new app structure in the `app` directory.

# Init the application

Create static storage directories for the application.

`$ php console project:init`

This will create the `storage` folder with some mandatory subfolders.

# Access the application

Open in web browser.

`https://localhost:8072/`

# Test the application

Runs mocha + codeception tests + static code analysis.

`$ php console project:test`

# Support

[pckg.org](https://pckg.org)