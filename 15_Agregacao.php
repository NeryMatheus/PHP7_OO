<?php
//Agregação
//Na agregação uma classe precisa da outra para executar uma ação, ou seja, uma classe utiliza outra como parte //de si própria

class Produtos {
	public $nome;
	public $valor;

	public function __construct($nome, $valor) {
		$this->nome = $nome;
		$this->valor = $valor;
	}
}

class Carrinho {
	public $produtos;

	public function Adicionar(Produtos $produto) {
//Agregação
		$this->produtos[] = $produto;
	}
	public function Exibir() {
		foreach ($this->produtos as $produto) {
			echo $produto->nome . "<br>";
			echo $produto->valor . "<hr>";
		}
	}
}

//Na agregação as instancias das classes são fora de outras classe
$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->Adicionar($produto1);
$carrinho->Adicionar($produto2);
$carrinho->Exibir();
?>