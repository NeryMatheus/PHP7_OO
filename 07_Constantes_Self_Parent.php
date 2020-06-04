<?php
/*
Constants - Uma constante é um identificador (nome) para um valor único. Como o nome sugere, esse valor não pode mudar durante a execução do script (exceto as constantes mágicas, que não são constantes de verdade). As constantes são case-sensitive por padrão. Por convenção, identificadores de constantes são sempre em maiúsculas.

Self - chamar métodos estáticos ou acessar atributos estáticos da classe. Ele também serve para instanciar um objeto da classe corrente. Usa-se $this para acessar membros (atributos, métodos) da instância e self para acessar membros estáticos.

Parent - Faz referência a classe pai que foi herdada pela classe atual. Basicamente foi criado para que você não precise, dentro da classe filha, ficar explicitando qual é a classe pai de onde será chamado o método, acessar o atributo, constante, etc.
 */

class Pessoa {
	const nome = "Matheus Nery";

	public function exibirNome() {
		echo self::nome; //Exibe a constante da própria classe.
	}
}

class Matheus extends Pessoa {
	const nome = "de Souza";
	public function exibirNome() {
		echo parent::nome; //Exibe a const da classe pai, no caso, a classe Pessoa
	}
}
$matheus = new Matheus();
$matheus->exibirNome();
?>