<?php
INCLUDE '../config/config.php';

class Conexion{
	static public function getConnect()
	{
		$connect = 'pgsql:host='.DB_HOST.';port=5432;dbname='.DB_NAME.';';
			try {
				$conn = new PDO($connect, DB_USER, DB_PASS);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo 'ERROR'. $e->getMessage();
			}
			return connect;

		
	}
}