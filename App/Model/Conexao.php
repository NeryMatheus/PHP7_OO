<?php

namespace App\Model;

class Conexao {

	private static $instance;

	public static function getConn() {
		//Irá vereificar se ja existe uma instância da classe Conexão
		if (!isset(self::$instance)) {
			self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', 'Nery@123');
		}

		return self::$instance;
	}

}
?>