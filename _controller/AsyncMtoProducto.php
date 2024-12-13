<?php

require_once "../config/Global.php";
require_once "CtrlMtoProducto.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  echo json_encode(["result" => 0, "msg" => "Método no permitido"]);
  die();
}

//Recepción de datos
$peticion = isset($_POST['peticion']) ? $_POST['peticion'] : "";
$id = isset($_POST['id']) ? $_POST['id'] : "";
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$precio = isset($_POST['precio']) ? $_POST['precio'] : "";

if (!$peticion && !$id && !$nombre && !$precio) {
  header('Content-Type: application/json');
  $jsonData = file_get_contents("php://input");
  $data = json_decode($jsonData, true);

  $peticion = $data['peticion'] ?? null;
  $id = $data['id'] ?? null;
  $nombre = $data['nombre'] ?? null;
  $precio = $data['precio'] ?? null;
}

//Procesamiento de los datos
switch ($peticion) {
  case "INSERT":
    $ctrl = new CtrlMtoProducto("INSERT");
    if (!$ctrl->validaAtributos(null, $nombre, $precio)) {
      echo json_encode(["result" => 0, "msg" => "ERROR: Datos inválidos"]);
    } else if ($ctrl->insertaRegistro($nombre, $precio)) {
      echo json_encode(["result" => 1, "msg" => "Registro insertado correctamente"]);
    } else {
      echo json_encode(["result" => 0, "msg" => "ERROR: Problema de inserción en BD"]);
    }
    break;
  case "UPDATE":
    $ctrl = new CtrlMtoProducto("UPDATE");
    if (!$ctrl->validaAtributos($id, $nombre, $precio)) {
      echo json_encode(["result" => 0, "msg" => "ERROR: Datos inválidos"]);
    } else if ($ctrl->actualizaRegistro($id, $nombre, $precio)) {
      echo json_encode(["result" => 1, "msg" => "Registro actualizado correctamente"]);
    } else {
      echo json_encode(["result" => 0, "msg" => "ERROR: Problema de actualización en BD"]);
    }
    break;
  case "DELETE":
    $ctrl = new CtrlMtoProducto("DELETE");
    if (!$ctrl->validaAtributos($id)) {
      echo json_encode(["result" => 0, "msg" => "ERROR: Datos inválidos"]);
    } else if ($ctrl->eliminaRegistro($id)) {
      echo json_encode(["result" => 1, "msg" => "Registro eliminado correctamente"]);
    } else {
      echo json_encode(["result" => 0, "msg" => "ERROR: Problema de eliminación en BD. Puede tener catálogos dependientes"]);
    }
    break;
  default:
    echo json_encode(["result" => 0, "msg" => "ERROR: Petición inválida"]);
    die();
}
