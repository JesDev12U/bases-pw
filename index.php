<?php
ini_set('display_errors', E_ALL); //Esta linea solo es para pruebas, no dejar en produccion

$ctrl = null;

//Usar el controlador solicitado por el usuario
if (isset($_POST["lstprod_agregar"])) {
  require_once "_controller/CtrlMtoProducto.php";
  $ctrl = new CtrlMtoProducto(-1); //-1 indica que vamos a agregar un registro
} else {
  require_once "_controller/CtrlListaProducto.php";
  $ctrl = new CtrlListaProducto();
}

//Cargar la vista maestra
include "_view/master.html";
