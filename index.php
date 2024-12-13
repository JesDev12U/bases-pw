<?php
ini_set("display_errors", E_ALL);

require_once "config/Global.php";

$querystring = isset($_GET["querystring"]) ? $_GET["querystring"] : RUTA_DEFAULT;
if (!str_ends_with($querystring, "/")) {
	$querystring = $querystring . "/"; //le falta /, se la pongo
}

$peticion = explode("/", $querystring);

$controlador = isset($peticion[0]) ? $peticion[0] : "";
$accion = isset($peticion[1]) ? $peticion[1] : "";
$id = isset($peticion[2]) ? $peticion[2] : "";

switch ($controlador) {
	case "producto":
		if ($accion == "") {
			require_once "_controller/CtrlListaProducto.php";
			$ctrl = new CtrlListaProducto();
		} else if ($accion == "agregar") {
			require_once "_controller/CtrlMtoProducto.php";
			$ctrl = new CtrlMtoProducto("INSERT");
		} else if ($accion == "editar") {
			if ($id) {
				require_once "_controller/CtrlMtoProducto.php";
				$ctrl = new CtrlMtoProducto("UPDATE", $id);
				$registro = $ctrl->seleccionaRegistro($id);
				if (count($registro) == 0) {
					echo "<h1>404</h1><p>El recurso que estás buscando no existe</p>";
					die();
				}
			} else {
				echo "<h1>404</h1><p>ID no proporcionado</p>";
				die();
			}
		}
		break;
	default:
		echo "<h1>404</h1><p>Controlador inválido</p>";
		die();
}

include "_view/master.php";
