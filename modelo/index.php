<?php
include_once(conexion.php)

class Modelo{
	private $Modelo;
	Private $db;
	Private $datos;
	public function __construct(){
		$this->Modelo = array();
	}
	 public function insertar($tabla, $data)
	{
		$consulta = "INSERT INTO ".$tabla." VALUES(null,".$data.")";
		$resultado=$this->db->query($consulta);
		if($resultado){
			return true;
		}else{
			return false;
		}
	}
	public function mostrar($tabla, $condicion){
		$consul="SELECT * FROM ".$tabla." WHERE ".$condicion.";";
		$resu=$this->db->query($consul);
		while ($filas=$resi->fetchAll(pdo::FETCH_ASSOC)) {
			$this->datos[]=$filas;
		}
		return $this->datos;
	}
	public function actualizar($tabla, $data, $condicion){
		$consulta = "UPDATE ".$tabla." SET ". $data ." WHERE ".$condicion;
		$resultado = $this->db->query($consulta);
		if($resultado){
			return true;
		}else {
			return false;
		}
	}
	public function eliminar($tabla, $condicion){
		$eli="DELETE FROM ".$tabla." WHERE ".$condicion;
		$res=$this->db->query($eli);
		if ($res) {
			return true;
		} else {
			return false;
		}
	}

}