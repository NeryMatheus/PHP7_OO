<?php
namespace App1\Model;

class Conexao {
	private static $instance;

	public static function getCon() {
		if (!isset(self::$instance)) {
			self::$instance = new \PDO('mysql:host=localhost; dbname=pdo;charset=utf8', 'root', 'Nery@123');
		}

		return self::$instance;
	}
}
?>