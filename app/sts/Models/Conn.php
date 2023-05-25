<?php

namespace Sts\Models;

use PDO;
use PDOException;

abstract class Conn
{
    private $db = "mysql";
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "site corporativo";
    private $port = 3306;
    private $connect;

    public function connectDb()
    {
        try{
            //Conexao com a porta
             //$this->connect = new PDO($this->db . ':host=' . $this->host. ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
             //Conexao sem a porta
             $this->connect = new PDO($this->db . ':host=' . $this->host. ';dbname=' . $this->dbname, $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
             //echo "Conexão realizada com sucesso!";
             //var_dump('continuou');
             return $this->connect;
        }
        catch (PDOException $err){
            //var_dump($err);
            die('Erro: por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com');
        }
        
    }
}