<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

class StsRead extends StsConn
{

    private $select;
    private $result = [];
    private $query;
    private $conn;
    

    function getResult(): array
    {
        return $this->result;
    }

    public function exeRead(string $table, $terms = null, $parseString = null)
    {
        //var_dump($table);
        $this->select = "SELECT * FROM {$table}";
        //var_dump($this->select);

        $this->exeInstruction();
    }

    private function exeInstruction()
    {
        $this->connection();
        try{
            $this->query->execute();
            $this->result = $this->query->fetchAll();
        }catch(PDOException $err){
            $this->result =null;
        }
    }

    private function connection()
    {
        $this->conn = $this->connectDb();
        $this->query = $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);

    }
}
