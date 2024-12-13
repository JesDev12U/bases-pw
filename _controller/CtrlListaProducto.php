<?php
require_once "_model/Model.php";

class CtrlListaProducto
{
  private $vista = "_view/lista_producto.php";
  public $datos;
  const JS = "js/ctrllistaproducto.js";

  public function renderContent()
  {
    $model = new Model();
    $this->datos = $model->seleccionaRegistros("productos", ["id", "nombre", "precio"]);
    include $this->vista;
  }

  public function renderJS()
  {
    include self::JS;
  }
}
