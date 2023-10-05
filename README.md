# Estudos sobre PHPUnit utilizando videos do youtube

---
**instalação PHPUnit**
- composer require --dev phpunit/phpunit

---
## Rodar testes comando no terminal

**Roda todos**
- vendor/bin/phpunit tests --colors

**Roda especifico**
- vendor/bin/phpunit tests --filter=CartTest::nome do teste --colors
- vendor/bin/phpunit tests --filter=nome do teste --colors

**Rodar xml**
- vendor/bin/phpunit --testsuite=tests

**Atualizar o arquivo autoload.php**
- composer dump-autoload

**Criar arquivo de test no laravel**
- php artisan make:test CustomerTest

**Codigo de depuração**
- dd()