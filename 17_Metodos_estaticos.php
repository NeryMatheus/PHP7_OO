<?php
//clone*
//construct*
//invoke*
//tostring*
//get*
//set*

class Pessoa {
	private $dados = [];

	public function __set($nome, $valor) {
		//Permite que atributos private sejam acessados fora da classe
		$this->dados[$nome] = $valor;
	}
	public function __get($nome) {
		//Permite que seja exibidos atribudos private fora da classe
		return $this->dados[$nome];
	}

	public function __toString() {
		echo "Tentei exibir o objeto Pessoa";
	}

	public function __invoke() {
		return "Tentei exibir o objeto Pessoa como função :| ";
	}
}

$pessoa = new Pessoa();
$pessoa->nome = "Matheus Nery";
$pessoa->idade = "23";
$pessoa->sexo = "M";

/*
echo $pessoa->nome . "<br>";
echo $pessoa->idade . "<br>";
echo $pessoa->sexo . "<br>";
 */
echo $pessoa();
?>