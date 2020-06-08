<?php
//Referência e Clonagem
class Pessoa {
	public $idade;

	public function __clone() {
		echo "Clonagem de Objetos - ";
	}
}

$pessoa = new Pessoa();
$pessoa->idade = "23";

$pessoa2 = $pessoa;
$pessoa2 = clone $pessoa;
$pessoa2->idade = "33";

echo $pessoa2->idade . "<hr><hr>";

//Tratamento de Exceções
//////////////////////////////////////////////////////////////////////////
class Email {
	public $email;

	public function validarEmail($email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("E-mail inválido!", 1);
		} else {
			echo "E-mail cadastrado na base de dados!";
		}
	}
}

$email = new Email();
try {
	$email->validarEmail("contato@");
} catch (Exception $e) {
	echo "Código: " . $e->getCode() . "<br>";
	echo "Mensagem: " . $e->getMessage() . "<br>";
	echo "Linha: " . $e->getLine() . "<br>";
	echo "Arquivo: " . $e->getFile() . "<br>";
}

echo "<hr><hr>";

//Associação
///////////////////////////////////////////////////////////
class Cliente {
	public $nome;
	public $endereco;
}

class Pedido {
	public $cliente;
	public $numero;
}

$cliente = new Cliente();
$cliente->nome = "Matheus Nery";
$cliente->endereco = "Rua Solimões";

$pedido = new Pedido();
$pedido->cliente = $cliente; //Associação
$pedido->numero = "12345";

$dados = [
	'nome' => $pedido->cliente->nome,
	'endereco' => $pedido->cliente->endereco,
	'numero' => $pedido->numero,
];
var_dump($dados);

echo "<hr><hr>";

//Agregação
/////////////////////////////////////////////////////////////////////////////
class Produto {
	public $nome;
	public $valor;

	function __construct($nome, $valor) {
		$this->nome = $nome;
		$this->valor = $valor;
	}
}

class Carrinho {
	public $produtos;

	public function Adicionar(Produto $produto) {
		$this->produtos[] = $produto;
	}
	public function Exibir() {
		foreach ($this->produtos as $produto) {
			echo $produto->nome . "<br>";
			echo $produto->valor . "<br>";
		}
	}
}

$produto1 = new Produto("Notebook", "1500");
$produto2 = new Produto("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->Adicionar($produto1);
$carrinho->Adicionar($produto2);
$carrinho->Exibir();

echo "<hr><hr>";

//Composição
/////////////////////////////////////////////////////////////////////
class Pessoa1 {
	public function atribuiNome($nome) {
		return "O nome da pessoa é: " . $nome;
	}
}

class Exibe {
	public $pessoa;
	public $nome;

	public function __construct($nome) {
		$this->pessoa = new Pessoa1();
		$this->nome = $nome;
	}
	public function exibeNome() {
		echo $this->pessoa->atribuiNome($this->nome) . "<br>";
	}
}

$exibe = new Exibe("Matheus Nery");
$exibe->exibeNome();

echo "<hr><hr>";

//Métodos Estáticos
///////////////////////////////////////////////////////////////////////////////////////////
class Pessoa2 {
	private $dados = [];

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}
	public function __get($nome) {
		return $this->dados[$nome] = $valor;
	}

	public function __toString() {
		echo "Ops, tentei exibir um objeto como string";
	}
	public function __invoke() {
		echo "Ops, tentei usar um objeto como função";
	}
}

$pessoa2 = new Pessoa2();
$pessoa2->nome = "Matheus Nery";
$pessoa2->idade = "23";
$pessoa2->sexo = "M";

echo $pessoa2();
/*
echo "Nome: " . $pessoa2->nome . "<br>";
echo "Idade: " . $pessoa2->idade . "<br>";
echo "Sexo: " . $pessoa2->sexo . "<br>";
 */

?>
