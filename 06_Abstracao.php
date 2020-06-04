<?php
//Classes e Métodos Abstratos
/*
Uma classe abstrata é uma classe que serve de modelo para outras classes. Ela sempre será uma superclasse genérica, e suas subclasses serão mais específicas. Além disso, ela não pode ser instanciada e pode conter ou não métodos abstratos, podendo ser implementados nas classes descendentes.
 */

abstract class Banco {
	protected $saldo;
	protected $limiteSaldo;
	protected $juros;

	public function getSaldo() {
		return $this->saldo;
	}
	public function setSaldo($s) {
		$this->saldo = $s;
	}

	abstract public function Sacar($s);
	abstract public function Depositar($d);
}

class Itau extends Banco {

	public function Sacar($s) {
		$this->saldo -= $s;
		echo "<hr> Sacou: " . $s;
	} //Fim da função Sacar
	public function Depositar($d) {
		$this->saldo += $d;
		echo "<hr> Depositou: " . $d;
	} //Fim da função Depositar

} //Fim da Classe Itau

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: " . $itau->getSaldo();
?>