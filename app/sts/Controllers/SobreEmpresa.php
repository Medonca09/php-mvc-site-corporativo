<?php

namespace Sts\Controllers;
   /**
   * Controller da página Contato
   * 
   * @author Lucas <lucas@lucas.com>
   */
class SobreEmpresa
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
   $loadView = new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->data);
   $loadView->loadView();
}
}