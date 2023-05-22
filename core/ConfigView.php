<?php 

namespace Core;

class ConfigView
{

    private $nome;
    private $dados;
    public function __construct(string $nome, array $dados)
    {
        $this->nome = $nome;
        $this->dados = $dados;
        //var_dump($this->nome);
        //var_dump($this->dados);
    }

    public function renderizar()
    {
        //var_dump('app/' . $this->nome . '.php');
        if(file_exists('app/' . $this->nome . '.php')){
            include 'app/' . $this->nome . '.php';
        }else{
            echo "Erro: por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com";
        }
    }
}