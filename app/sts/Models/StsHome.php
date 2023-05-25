<?php 

namespace Sts\Models;


class StsHome
{
    private $data;
    public function index(): array
    {
        $this->data = [ 
            "title" => "Topo da pagina",
        "description" => "Descrição do serviço"
    ];
        //var_dump($this->data);
        return $this->data;
    }

    
}