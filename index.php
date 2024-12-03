<?php
ini_set('display_errors', E_ALL); //Esta linea solo es para pruebas, no dejar en produccion
//Usar el controlador solicitado por el usuario
require_once "_controller/CtrlListaProducto.php";
require_once "_model/ModelListaProducto.php";

$ctrl = new CtrlListaProducto();
$ctrl->cargaDatos();
$model = new ModelListaProducto();
//Cargar la vista maestra
include "_view/master.html";
