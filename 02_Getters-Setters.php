<?php
//Getters and Setters

class Login {
	private $email;
	private $senha;

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}
	public function getSenha() {
		return $this->senha;
	}
	public function setSenha($s) {
		$this->senha = $s;
	}

	public function Logar() {
		if ($this->email == "matheusnery345@gmail.com" and $this->senha == "123456") {
			echo "Logado com sucesso";
		} else {
			echo "Dados Inválidos";
		}
	}
}

$logar = new Login();
$logar->setEmail("matheusnery345/()@gmail.com"); //Setando Valores, ou seja, Usando valores
$logar->setSenha("123456"); //Setando Valores, ou seja, Usando valores
$logar->Logar();
echo "<br>";
echo $logar->getEmail() . "<br>";

?>