<?php
//SETS
require_once 'vendor/autoload.php';

//Produto
/*
$produto = new \App\Model\Produto();
$produto->setId(3);
$produto->setNome("Cadeira");
$produto->setDescricao("Gamer");
 */

//ProdutoDao
$produtodao = new \App\Model\ProdutoDao();
//$produtodao->delete(3);
$produtodao->read();

foreach ($produtodao->read() as $produto) {
	echo "Produto: " . $produto['nome'] . "<br>" . "Descrição: " . $produto['descricao'] . "<hr>";
}

?>