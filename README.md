<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Gerenciamento Escolar com laravel

## INSTALE AS DEPENDÊNCIAS
```

$ COMPOSER INSTALL

```

## CRIAR/EDITAR O ARQUIVO .ENV
```

## touch .env

```

## RODE AS MIGRATIONS
```

PHP ARTISAN MIGRATE

```

## AGORA RODE
```

PHP ARTISAN SERVE

```

---

## RODANDO AS FACTORYS
```
Essa factory irá criar junto com os estudantes os respectivos responsaveis por cada estudante.


php artisan db:seed --class=StudentSeeder


Essa factory irá criar as Turmas 

php artisan db:seed --class=ClasseSeeder

```
