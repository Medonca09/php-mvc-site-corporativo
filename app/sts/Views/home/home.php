<?php 

echo "<h1>Página inicial</h1>";
 
//var_dump($this->data[0]);

extract($this->data[0]);
echo "ID: $id <br>";
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <hr>";

extract($this->data[1]);
echo "ID: $id <br>";
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <hr>";

extract ($this->data[2]);
echo "ID: $id <br>";
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <hr>";

extract($this->data[3]);
echo "ID: $id <br>";
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <hr>";

extract($this->data[4]);
echo "ID: $id <br>";
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <hr>";

extract($this->data[5]);
echo "ID: $id <br>"; 
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <hr>";


//Testar o acesso ao arquivo
//http://localhost/php-mvc-site-corporativo/app/sts/Views/home/home.php

//Testar o acesso ao arquivo
//http://localhost/php-mvc-site-corporativo/app/sts/