<?php

require_once "Model.php";

class CtrlMtoProducto
{
	const VISTA = "_view/mto_producto.php";
	const JS = "js/ctrlmtoproducto.js";
	private $peticion;
	public $id;
	public $nombre;
	public $precio;

	public function __construct($peticion = null, $id = null)
	{
		$this->peticion = $peticion;
		$this->id = $id;
		if ($id !== null) {
			$res = $this->seleccionaRegistro($id);
			if (count($res) !== 0) {
				$this->nombre = $res[0]["nombre"];
				$this->precio = $res[0]["precio"];
			}
		}
	}

	public function renderContent()
	{
		include self::VISTA;
	}

	public function renderJS()
	{
		include self::JS;
	}

	public function validaAtributos($id = null, $nombre = null, $precio = null)
	{
		$res = true;
		if (!is_null($id)) {
			$id = (int)$id;
			$res = $res && is_integer($id) && $id > 0;
		}
		if (!is_null($nombre)) {
			$res = $res && $nombre != "";
		}
		if (!is_null($precio)) {
			$precio = (float)$precio;
			$res = $res && is_double($precio) && $precio >= 0;
		}
		return $res;
	}

	public function seleccionaRegistro($id)
	{
		$model = new Model();
		$res = $model->seleccionaRegistros("productos", ["nombre", "precio"], "id=$id");
		return $res;
	}

	public function insertaRegistro($nombre, $precio)
	{
		$model = new Model();
		$res = $model->agregaRegistro("productos", ["nombre", "precio"], [$nombre, $precio]);
		return $res;
	}

	public function actualizaRegistro($id, $nombre, $precio)
	{
		$model = new Model();
		$res = $model->modificaRegistro("productos", ["nombre", "precio"], "id=$id", [$nombre, $precio]);
		return $res;
	}

	public function eliminaRegistro($id)
	{
		$model = new Model();
		$res = $model->eliminaRegistro("productos", "id=$id");
		return $res;
	}
}
