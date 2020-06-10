<?php
require_once 'vendor/autoload.php';

//Produto
$produto = new \App1\Model\Produto();
//$produto->setId(8); Para o Update
//$produto->setNome("TV 52 polegadas");
//$produto->setDescricao("LG");

//ProdutoDao
$produtodao = new \App1\Model\ProdutoDao();
//$produtodao->create($produto);
//$produtodao->update($produto);
$produtodao->delete(4);

foreach ($produtodao->read() as $produto) {
	echo "ID: " . $produto['id'] . "<br>" . "Produto: " . $produto['nome'] . "<br>" . "Descrição: " . $produto['descricao'] . "<hr>";
}
?>