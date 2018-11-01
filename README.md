# Slim 3 API Skeleton

This is a simple skeleton project for Slim 3 that includes ezSQL.

Also theres same component, which is mostly required.

## Requirements
* PHP 5.6.x or newer
* MySQL Server 5.x or newer

## Create your project:

    $ composer create-project -n -s dev sunaryohadi/slim-api-skeleton my-app

### Run it:

1. `$ cd my-app`
2. `$ composer start`
3. Browse to http://localhost:8080

## Key directories

* `private`: Application code
* `private/src`: All class files within the `private` namespace
* `tmp/log`: Log files
* `web`: Webserver root
* `private/routes`: Router file
* `private/vendor`: Composer dependencies

## Key files

* `web/index.php`: Entry point to Application
* `private/settings.php`: Configuration
* `private/dependencies.php`: Services for Pimple
* `private/middleware.php`: Application middleware
* `private/routes/root.php`: Main route are here
* `private/src/Action/...`: Action classes better here

## Credits
* https://github.com/akrabat/slim3-skeleton
* http://justinvincent.com/ezsql
