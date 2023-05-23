<?php

namespace Sts\Controllers;

/**
 * Controller da página Contato
 * 
 * @author Lucas <lucas@lucas.com>
 */
class Contato 
{
    /** @var array $dados Recebe os dados que devem ser enviados para VIEW*/
    private $data;
    /**
     * Instanciar a classe responsável em carregar a View
     *
     * @return void
     */
    public function index()
    {
       $this->data = [];
       $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
       $loadView->loadView();
    }
}