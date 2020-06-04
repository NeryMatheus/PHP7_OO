<?php

//Treino Get e Set
class Login {
	protected $nome;
	protected $email;
	protected $idade;

	public function __construct($email, $nome, $idade) {
		$this->setEmail($email);
		$this->setNome($nome);
		$this->setIdade($idade);
	}

	public function getNome() {
		return $this->nome;
	}
	public function setNome($n) {
		$this->nome = $n;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($e) {
		$this->email = $e;
	}
	public function getIdade() {
		return $this->idade;
	}
	public function setIdade($i) {
		$this->idade = $i;
	}

	public function Logar() {
		if ($this->email == "teste@gmail.com" AND $this->nome == "Matheus" AND $this->idade == "23") {
			echo "Logado!";
		} else {
			echo "Erro de login!";
		}
	}
} //Fim classe Login
$login = new Login("teste@gmail.com", "Matheus", "23");
$login->Logar();
echo "<hr>";
echo "<br> Email: " . $login->getEmail();
echo "<br> Nome: " . $login->getNome();
echo "<br> Idade: " . $login->getIdade();
echo "<hr><hr><hr>";

//Treino Abstração
abstract class Banco {
	protected $saldo;
	protected $saque;
	protected $deposito;

	public function getSaldo() {
		return $this->saldo;
	}
	public function setSaldo($s) {
		$this->saldo = $s;
	}
	abstract public function Sacar($s);
	abstract public function Depositar($d);
}

class Itau extends Banco {
	public function Sacar($s) {
		$this->saldo -= $s;
		echo "<br> Sacou: " . $s;
	}
	public function Depositar($d) {
		$this->saldo += $d;
		echo "<br> Depositou: " . $d;
	}
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<br> Saldo: " . $itau->getSaldo();
echo "<br>";
$itau->Sacar(250);
$itau->Depositar(900);
echo "<br><br> Saldo: " . $itau->getSaldo();
echo "<br><hr><hr><hr>";

//Treino Const - Self e Parent
class Pessoa {

	const nome = "Matheus";

	public function exibirNome() {
		echo self::nome;
	}

}

class Matheus extends Pessoa {

	const nome = "Nery";

	public function exibirNome() {
		echo parent::nome;
	}

}

$matheus = new Matheus();
$matheus->exibirNome();
?>