<?php
require_once "classes/jesdev12u/MySQLAux.php";

class ModelListaProducto
{
  public function seleccionaRegistros($tabla, $campos, $condicion = null, $params = null)
  {
    $bd = new MySQLAux("127.0.0.1", "tienda", "root", "Str0ngPassword!");

    return $bd->selectRows($tabla, $campos, $condicion, $params);
  }

  public function renderContent()
  {
    include "_view/lista_producto.html";
  }
}
