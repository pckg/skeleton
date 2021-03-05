# pckg/skeleton

A clean start for every pckg project.

![Build status](https://github.com/pckg/skeleton/workflows/Pckg%20Skeleton%20CI/badge.svg)

# Features

- PHP 7.4 Framework with ORM, Migrations, Auth, Queue and I18n modules on the backend - [pckg](https://github.com/pckg)
- Webpack with VueJS ecosystem integration on the frontend - [pckg-app/frontend](https://github.com/pckg-app/frontend)
  and [pckg-app/frontend-dev](https://github.com/pckg-app/frontend-dev)
- Plug'n'play Docker images for Dev and Prod environments - [pckg/docker-images](https://github.com/pckg/docker-images)
- CI & CD pipelines (Github Workflows) - `./github/workflows/`
- PHP Cloc, Stan, CS, Codeception and Mocha - `composer.json` and `package.json`

# Dev environment

The whole dev environment with system dependencies and some services is available in `schtr4jh/pckg:latest` Docker
image.

```
$ docker run \
-v $PWD:/var/www/html \
-i -p 8072:443 \
-t schtr4jh/pckg:latest \
--restart=always /bin/bash
```

_See [pckg/docker-images](https://github.com/pckg/docker-images) for more info on configuration, parameters and
services._

# Create a project

Create a project with composer and install all depencencies including dev.

`# composer create-project pckg/skeleton . -s dev --prefer-dist`

Install frontend dependencies.

`# yarn install`

# Console

See what `console` provides.

`# php console`

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

Create a directory structure for the new application.

`# php console app:create`

Answer to some questions and create a new app structure in the `app` directory.

# Init the application

Create static storage directories for the application.

`# php console project:init`

This will create the `storage` folder with some mandatory subfolders not included in GIT.

# Access the application

Open in web browser.

`https://localhost:8072/`

# Directory structure
`vendor`, `components` and `node_modules` - dependency managers directories
`config` - root project configuration
`www` - directory that will be exposed to the internet
`storage` - directory for framework, cache, uploads, tmp and other private and public files
`app/$app/config` - app configuration
`app/$app/src` - app source files
`app/$app/public` - static assets (private, can be mounted to `www`)

_Note: it is recommended to disable discovery of dependency manager directories, `www` and `storage`._

# Test the application

Runs mocha + codeception tests + static code analysis.

`# php console project:test`

# More

## Backend

- [pckg/framework](https://github.com/pckg/framework) - learn about application lifespan, console access, routing,
  requests, responses, templating and other framework concepts.
- [pckg/database](https://github.com/pckg/database) - learn about database and data-layer organization
- [pckg/migrator](https://github.com/pckg/migrator) - migrate your database structure, data and config
- [pckg/collection](https://github.com/pckg/collection) - more about data and collection manipulation
- [pckg/htmlbuilder](https://github.com/pckg/htmlbuilder) - more about form and request validation
- [pckg/manager](https://github.com/pckg/manager) - more about asset & meta management
- [pckg/auth](https://github.com/pckg/auth) - more about local and remote authentication options
- [pckg/translator](https://github.com/pckg/translator) - mora about i18n layer
- [pckg/queue](https://github.com/pckg/queue) - more about queue layer
- [pckg/locale](https://github.com/pckg/locale) - more about localization layer
- [pckg/cache](https://github.com/pckg/cache) - more about cache layer
- [pckg/httpql](https://github.com/pckg/httpql) - more about querying your data

## Frontend

- [pckg/helpers-less](https://github.com/pckg/helpers-less) - simple frontend LESS framework
- [pckg/helpers-js](https://github.com/pckg/helpers-js) - frontend Vue helpers
- [pckg/orm](https://github.com/pckg/orm) - simple JS ORM

# Support

[pckg/framework](https://github.com/pckg/framework)
[pckg.org](https://pckg.org)
