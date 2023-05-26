<?php

namespace Sts\Models;

use Sts\Models\helper\StsConn;

class StsListarBlog extends StsConn
{

    private $stsconn;

    public function listar(): array
    {
        //echo "Acessou a models listar<br>";
        $this->stsconn = $this->connectDb();
        var_dump($this->stsconn);

        $query_artigos = "SELECT id, titulo, conteudo 
                          FROM artigos
                          ORDER BY id DESC 
                          LIMIT 40";
        $result_artigos = $this->stsconn->prepare($query_artigos);
        $result_artigos->execute();
        $retorno = $result_artigos->fetchAll();
        var_dump($retorno);
        return $retorno;
        
    }
}