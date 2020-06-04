<?php
/*
Quando se trabalha com métodos estáticos, não é necessário instanciar a classe. >>Ex: login = new Login();<<, basta fazer >>Login::verificaLogin();<<
 */

class Login {
	public static $user;

	public static function verificaLogin() {
		echo "O usuário " . self::$user . " esta logado!<br><br>";
	}

	public function sairSistema() {
		echo "O usuário " . self::$user . " saiu do Sistema!<br>";
	}
} //Fim classe login

$login = new Login();
Login::$user = "Matheus";
Login::verificaLogin();
$login->sairSistema();
?>