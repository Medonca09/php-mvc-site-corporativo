<?php

namespace Sts\Models;

use PDO;

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
        $this->connection = $connection->connectDb();

        $query_artigos = "SELECT id, titulo, conteudo 
                        FROM artigos
                        WHERE id=:id
                        LIMIT :limit";
        $result_artigos = $this->connection->prepare($query_artigos);

        /* var_dump($result_artigos);
        die(); 

        $id = 1;
        $limit = 1;

        /* Utilizando bindParam não é possível passar o segundo parâmetro da função sem uma variável */
        /*$result_artigos->bindParam('id', $id, PDO::PARAM_INT);
        $result_artigos->bindParam('limit', $limit, PDO::PARAM_INT); 

        $result_artigos->bindValue(':limit', 1, PDO::PARAM_INT);
        $result_artigos->bindValue(':id', 1, PDO::PARAM_INT);

        $result_artigos->execute();
        $this->data = $result_artigos->fetch();*/

        $viewHome = new \Sts\Models\helper\StsRead();
        $viewHome->exeRead("artigos");
        $this->data= $viewHome->getResult();

        //var_dump($this->data);

        return $this->data;
    }
}
