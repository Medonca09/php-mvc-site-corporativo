<?php

namespace Core;

abstract class Config
{
    protected function config(): void
    {
        //URL do projeto
        define('URL', 'http://localhost/php-mvc-site-corporativo/');
        define('URLADM', 'http://localhost/php-mvc-site-corporativo/adm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        //Credenciais do banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'site corporativo');
        define('PORT', 3306);
        define('EMAILADM', 'adm@empresa.com.br');
    }
}