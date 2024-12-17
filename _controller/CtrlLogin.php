<?php
class CtrlLogin
{
  const VISTA = "_view/login.php";
  const JS = "js/login.js";

  public function renderContent()
  {
    include self::VISTA;
  }

  public function renderJS()
  {
    include self::JS;
  }
}
