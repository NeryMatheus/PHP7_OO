<?php
/*Herança é um recurso que permite que classes compartilhem atributos e métodos afim de reaproveitar códigos ou
comportamentos generalizados*/

class Veiculo {
	public $modelo;
	public $cor;
	public $ano;

	public function Andar() {
		echo "Andando...";
	} //Fim da função andar

	public function Parar() {
		echo "Parou.";
	} //Fim da função parar
} //FIm classe veiculo

class Carro extends Veiculo {
	public function ligarLimpador() {
		echo "Limpando Parabrisa em 3...2..1";
	}
} //Fim classe carro

class Moto extends Veiculo {
	public function darGrau() {
		echo "Dando GRAU em 3...2..1";
	}
} //Fim classe moto

//Carro
$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Preto";
$carro->ano = "2007/2008";
echo "<br>" . $carro->Andar();
echo "<br>" . $carro->ligarLimpador();
echo "<br>" . $carro->Parar();
echo "<pre>";
var_dump($carro);
echo "</pre>";
echo "<br><br><hr><br>";

//Moto
$moto = new Moto();
$moto->modelo = "Bros";
$moto->cor = "Azul e Branco";
$moto->ano = "2011";
echo "<br>" . $moto->Andar();
echo "<br>" . $moto->darGrau();
echo "<br>" . $moto->Parar();
echo "<pre>";
var_dump($moto);
echo "</pre>";
?>