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
        $this->data = [ 
            "title" => "Topo da pagina",
        "description" => "Descrição do serviço"
    ];
        
        $connection=new \Sts\Models\helper\StsConn();
        $connection->connectDb();
        var_dump($connection);

        return $this->data;
    }

    
}