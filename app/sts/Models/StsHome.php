<?php

namespace Sts\Models;


class StsHome
{
    /** @var array $data Recebe os registros do banco de dados*/
    private $data;

    /** @var object $connection Recebe a conexão do banco de dados*/
    private $connection;

    /**
     * Criar o array com dados da página home
     * @return array Retorna informações para a página Home
     */

    public function index(): array
    {
        /*$this->data = [
            "title" => "Topo da pagina",
            "description" => "Descrição do serviço"
        ];*/

        $connection = new \Sts\Models\helper\StsConn();
        $conn = $connection->connectDb();

        $query_artigos = "SELECT id, titulo, conteudo 
                        FROM artigos
                        ORDER BY id 
                        LIMIT 1";
        $result_artigos = $conn->prepare($query_artigos);
        $result_artigos->execute();
        $this->data = $retorno = $result_artigos->fetch();

        //var_dump($retorno);
        return $this->data;
    }
}
