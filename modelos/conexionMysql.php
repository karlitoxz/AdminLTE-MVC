<?php 

	Class ConexionMysql{

		static public function conectarMysql(){

			//parametros PDO ("nameserver;basededatos","usuario","contraseña")
			$link = new PDO("mysql:host=localhost;dbname=test","root","root");
			$link ->exec("set names utf8");
			$link->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			return $link;
		}

	}

		/*$stmt = ConexionMysql::conectarMysql()->prepare("SELECT * FROM tabla");
		if ($stmt->execute()) {
			var_dump($stmt->fetchAll()) ;
		}else{
			print_r(ConexionMysql::conectarMysql()->errorInfo());
		}*/
?>