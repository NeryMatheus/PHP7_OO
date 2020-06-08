<?php
//Referência e Clonagem de Objetos

class Pessoa {
	public $idade;

	public function __clone() {
		echo "Cloangem de Objetos - ";
	} //É inicializado quando utiliza-se a palavra chave Clone
}

$pessoa = New Pessoa();
$pessoa->idade = 25;

$pessoa2 = $pessoa; //Referencia
$pessoa2 = clone $pessoa; //Clone
$pessoa2->idade = 35;

echo $pessoa2->idade;

?>