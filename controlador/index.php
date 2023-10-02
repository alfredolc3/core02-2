<?php
require_once("modelo/index.php");

class modeloControlador{
	private $model;
	public function __construct(){
		$this->model = new Modelo();
	}

	//mostrar
	static function index(){
		$solicitudes = new Modelo();
		$datos = $solicitudes->mostrar("domicilio.vw_core02", "usuario='alc'");

		require_once("vista/index.php");
	}
}
