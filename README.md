# sxako_be
## Frequently Used Commands
- start local server
`symfony server:start -d`
- make entity 
`symfony console make:entity EntityName`
- make controller `php bin/console make:controller TacticsPuzzlesController`
- add auto migrations with `symfony console make:migration` 
- set up new blank migration with `symfony console doctrine:migrations:generate`
- run migrations with  `symfony console doctrine:migrations:migrate`
- undo all migrations with `symfony console doctrine:migrations:migrate first`

## Notes
- Login built with https://symfony.com/doc/current/security.html
- Generating token with https://medium.com/@edouard.courty/how-to-enable-jwt-authentication-with-symfony-83a05ab2592f
and https://blog.theodo.com/2022/12/symfony-jwt-authentication/