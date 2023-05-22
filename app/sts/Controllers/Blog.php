<?php

namespace Sts\Controllers;

use Core\ConfigView;

class Blog
{
    private $dados;

    public function index(){
        //echo "Controller/Página Blog<br>";
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->dados['artigos'] = $listarArtigo->listar();
        //var_dump($this->dados);
        $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo",$this->dados);
        $carregarView->renderizar();
    }
}