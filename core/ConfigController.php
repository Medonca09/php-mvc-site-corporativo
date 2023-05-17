<?php

namespace Core;

class ConfigController
{
    private  $url;
    private $urlArray;
    private  $urlController;
    private  $urlMetodo;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            //var_dump($this->url);
            $this->urlArray = explode("/", $this->url);
            //var_dump($this->urlArray);

            if ((isset($this->urlArray[0])) and (isset($this->urlArray[1]))) {
                $this->urlController = $this->urlArray[0];
                $this->urlMetodo = $this->urlArray[1];
            } else {
                $this->urlController = "erro";
                $this->urlMetodo = "index";
            }
        } else {
            $this->urlController = "home";
            $this->urlMetodo = "index";
        }

        echo "Controller: {$this->urlController} - Método: {$this->urlMetodo} <br>";
    }

    public function loadPage()
    {
        echo "Carregar a página/Controller <br>";
    }
}
