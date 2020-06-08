<?php
//Composição
//Na composição, uma classe cria a instância de outra classe em si própria, sendo assim, quando ela for destruída, a outra classe também será destruída.

class Pessoa {
	public function atribuiNome($nome) {
		return "O nome da pessoa é: " . $nome;
	}
}

class Exibe {
	public $pessoa;
	public $nome;

	public function __construct($nome) {
		$this->pessoa = new Pessoa(); //A instância da classe esta dentro de outra classe, ou seja, Composição
		$this->nome = $nome;
	}

	public function exibeNome() {
		echo $this->pessoa->atribuiNome($this->nome) . "<br>";

	}
}

$exibe = new Exibe("Matheus Nery");
$exibe->exibeNome();
?>