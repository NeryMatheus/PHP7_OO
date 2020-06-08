<?php
//Associação
//Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.

class Pedido {
	public $numero;
	public $cliente;
}

class Cliente {
	public $nome;
	public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Matheus Nery";
$cliente->endereco = "Rua Solimões";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente; // Associação

$dados = [
	'numero' => $pedido->numero,
	'nome' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco,
];

var_dump($dados);
?>