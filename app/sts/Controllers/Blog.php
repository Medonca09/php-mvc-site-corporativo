<?php

namespace Sts\Controllers;

use Core\ConfigView;
use Sts\Models\StsListarBlog;

class Blog
{
    private $dados;

    public function index(){
        //echo "Controller/Página Blog<br>";
        $listarArtigo = new StsListarBlog();
        $dados['artigos'] = $listarArtigo->listar();
        //var_dump($dados);
        $carregarView = new ConfigView("sts/Views/blog/listarArtigo",$dados);
       /*  var_dump($carregarView);
        die(); */

        $carregarView->renderizar();
    }
}