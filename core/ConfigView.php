<?php 

namespace Core;

/**
 * Carregar as páginas da View
 * 
 * @author Lucas <lucas@lucas.com>
 */
class ConfigView
{
    /**
     * Receber o endereço da VIEW e od dados
     * @param string $name Endereço da VIEW que deve ser carregada
     * @param array $dados Dados que a VIEW deve receber.
     */
    private $name;
    private $data;
    
    public function __construct($name, array $data)
    {
        $this->name = $name; 
        $this->data = $data;
        var_dump($this->name);
        var_dump($this->data);
    }

    public function loadView()
    {
        //var_dump('app/' . $this->nome . '.php');
        if(file_exists('app/' . $this->name . '.php'))
        {
            include 'app/' . $this->name . '.php';
        }else{
            die("Erro: Por favor tente novamente mais tarde. Caso o problema persista, entre em contato com o administrador " . EMAILADM) ;
        }
    }
}
