<?php
require_once "_model/Model.php";

class CtrlListaProducto
{
  private $vista = "_view/lista_producto.html";
  public $datos = [];

  public function renderContent()
  {
    $model = new Model();
    $this->datos = $model->seleccionaRegistros("productos", ["id", "nombre", "precio"]);
    include $this->vista;
  }
}
