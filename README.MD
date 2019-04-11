# Symfony 4.2.5 with API Platform

Create the database and its schema:

- `bin/console doctrine:database:create`
- `bin/console doctrine:schema:create`

And start the built-in PHP server or the Symfony WebServerBundle:

### Built-in PHP server
`php -S 127.0.0.1:8000 -t public`

### Symfony WebServerBundle
- `composer req server --dev`
- `bin/console server:run`