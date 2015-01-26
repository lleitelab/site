Site
====

Proposta de esqueleto para sites/sistemas com módulos prontos


## Tecnologias / ferramentas escolhidas por hora...

### Para o desenvolvimento
 - [Bower](bower.io)
 - [Grunt](gruntjs.com)
 - [Sass](sass-lang.com)
 - [Composer](https://getcomposer.org/)
 - [Node](https://www.npmjs.org/) (Para instalar o ambiente).

### Frontend
 - [Bootstrap](https://getbootstrap.com)
 - [AngularJs](https://angularjs.org/)
 - [Twig](http://twig.sensiolabs.org/)

### Backend - PHP
 - [Silex](http://silex.sensiolabs.org/)

### Testes
 - [PHPUnit](https://phpunit.de/)

## Subindo o ambiente

    $ git clone https://github.com/lleitelab/site.git
    $ cd site
    $ composer install
    $ php -S 0.0.0.0:8080 -t ./public/ -f webServer.php

Depois acesse [http://localhost:8080](http://localhost:8080)

## Explicando a proposta

Basicamente, a proposta é ter propostas de dominios prontos como por exemplo
 - usuário (cadastro, login, acesso, autenticação com redes sociais).
 - catalogo de produtos.
 - adiministração (de todas as propostas criadas).
 - todos os módulos documentados e testados.

## Motivação para tal empreitada
Apenas por estudo !!!

## Rodando testes
    $ vendor/bin/phpunit