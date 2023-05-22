<?php 

//echo "View - listar os artigos<br>";
    //var_dump($this->dados);
if($this->dados){

    foreach($this->dados['artigos'] as $artigo) {
        extract($artigo);?>

            ID: <?= $id ?> <br/>
            Título: <?= $titulo ?> <br/>
            Conteúdo: <?= $conteudo ?>

            <hr>
        <?php
    }
}else{
    //false, 0, 0.0, empty string (“”), “0”, NULL, an empty array => cairia neses condição com falsy values
    echo "<h1>Não foi possível obter os dados para listagem</h1>";
}

