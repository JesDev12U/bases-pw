<?php
class CtrlMtoProducto
{
  private $id;
  private $vista = "_view/mto_producto.html";

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function renderContent()
  {
    if ($this->id === -1) {
      //Nuevo registro

    } else if ($this->id > 0) {
      //Editar Registro

    }
    include $this->vista;
  }
}
