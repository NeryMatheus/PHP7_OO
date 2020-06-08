<?php
//Tratamento de Exceções
/*
Ocorrência anormal que afeta o funcionamento da aplicação
Excpetion é a classe base para todas Exceptios
message, code, file, line
 */

class Newsletter {
	public function cadastrarEmail($email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("Este email é inválido", 1);
		} else {
			echo "Email Cadastrado com sucesso";
		} //Fim do if-else
	} //Fim da função cadastrarEmail
} //Fim da classe Newslleter

$newsletter = new Newsletter();

try {
	$newsletter->cadastrarEmail("contato@");
} catch (Exception $e) {
	echo "Mensagem: " . $e->getMessage() . "<br>";
	echo "Código: " . $e->getCode() . "<br>";
	echo "Linha: " . $e->getLine() . "<br>";
	echo "Arquivo: " . $e->getFile() . "<br>";
} //Fim do try-catch

?>
