<?php
//Simulamos tener las credenciales aquí
$email = "admin@admin.com";
$password = "admin";
session_start();

//Recibe los datos del cliente
$input = file_get_contents("php://input");
$data = json_decode($input, true);
$resultado = false;

if (isset($data['email'], $data['password']) && $data['email'] === $email && $data['password'] === $password) {
  $_SESSION['loggeado'] = true;
  $resultado = true;
} else {
  $resultado = false;
}

echo json_encode(["resultado" => $resultado, "email" => $data['email'], "password" => $data['password']]);
