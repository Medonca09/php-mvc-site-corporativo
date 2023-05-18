<?php

namespace Sts\Controllers;

class Blog
{
    private $dados;

    public function index(){
        //echo "Controller/Página Blog<br>";
        $listarArtigos = new \Sts\Models\StsListarBlog();
        $this->dados = $listarArtigos->listar();
        var_dump($this->dados);
    }
}