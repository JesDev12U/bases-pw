<?php
ini_set('display_errors', E_ALL); //Esta linea solo es para pruebas, no dejar en produccion

$ctrl = null;

//Usar el controlador solicitado por el usuario
if (isset($_POST["controlador"])) {
  $controlador = $_POST["controlador"];
  switch ($controlador) {
    case "CtrlAjaxProducto":
      break;

    case "CtrlMtoProducto":
      break;
    default:
  }
} else {
  die("Petición incorrecta");
}

//Cargar la vista maestra
include "_view/master.html";

function ctrlAjaxProducto() {}

function ctrlMtoProducto()
{
  if (isset($_POST["lstprod_agregar"])) {
    require_once "_controller/CtrlMtoProducto.php";
    $ctrl = new CtrlMtoProducto(-1); //-1 indica que vamos a agregar un registro
  } else {
  }
}

function ctrlListaProducto()
{
  require_once "_controller/CtrlListaProducto.php";
  $ctrl = new CtrlListaProducto();
}
