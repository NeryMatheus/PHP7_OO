<?php
//Getters and Setters

class Login {
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome) {
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);
	} //Fim do Construtor

	public function getNome() {
		return $this->nome;
	}

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

$logar = new Login("matheusnery345/()@gmail.com", "123456", "Matheus Nery");
$logar->Logar();
echo "<br>";
echo $logar->getEmail() . "<br>";
echo $logar->getNome();
?>