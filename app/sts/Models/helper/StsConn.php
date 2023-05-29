<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

abstract class StsConn
{
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $dbname = DBNAME;
    private $port = PORT;
    private $connect;

    public function connectDb(): object
    {
        try{
            //Conexao com a porta
             $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" .$this->dbname, $this->user, $this->pass);
             
             return $this->connect;
        }catch (PDOException $err){
            die('Erro: por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com');
        }
        
    }
}