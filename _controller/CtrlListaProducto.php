<?php
require_once "_model/ModelListaProducto.php";

class CtrlListaProducto
{
  public $datos = [];

  public function cargaDatos()
  {
    $model = new ModelListaProducto();
    $datos = $model->seleccionaRegistros("productos", ["id", "nombre", "precio"]);
    var_dump($datos);
  }
}
