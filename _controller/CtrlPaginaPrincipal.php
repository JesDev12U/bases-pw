<?php

class CtrlPaginaPrincipal
{
  const VISTA = "_view/paginaprincipal.php";
  const JS = "js/ctrlpaginaprincipal.js";

  public function renderContent()
  {
    include self::VISTA;
  }

  public function renderJS()
  {
    include self::JS;
  }
}
