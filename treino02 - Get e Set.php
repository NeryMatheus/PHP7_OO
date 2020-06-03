<?php
class Login {
	private $email;
	private $senha;

	public function getEmail() {
		return $this->e;
	}
	public function setEmail($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $e;
	}
	public function getSenha() {
		return $this->senha;
	}
	public function setSenha($s) {
		$this->senha = $s;
	}

	public function Logar() {
		if ($this->email == "matheusnery345@gmail.com" AND $this->senha == "123456") {
			echo "Logado com Sucesso";
		} else {
			echo "Erro de Login";
		}
	}
}

$login = new Login();
$login->setEmail("matheusnery345@gmail.com");
$login->setSenha("123456");
$login->Logar();
?>