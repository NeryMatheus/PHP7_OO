<?php
//Classes e Atributos

//Classes - a primeira letra do nome da classe sempre é maiúscula
class Pessoa {
	public $nome; //Atributos
	public $idade; //Atributos

	public function Falar() {
		echo $this->nome . " de " . $this->idade . " anos de idade acabou de falar.";
	} //Fim da função falar
} //Fim da Classe Pessoa

$matheus = new Pessoa(); //Instanciando a classe Pessoa

$matheus->nome = "Matheus Nery"; //Atribuindo Valores aos Atributos

$matheus->idade = 25; //Atribuindo Valores aos Atributos

$matheus->Falar(); //Utilizando a função 'Falar' que esta dentro da classe 'Pessoa'

?>