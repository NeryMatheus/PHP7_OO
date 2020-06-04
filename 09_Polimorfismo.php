<?php
/*
Substituir ou reescrever um método herdado da superclasse ou classe pai
 */

class Animal {
	public function Andar() {
		echo "O animal andou.";
	}
}

class Cavalo extends Animal {
	public function Andar() {
		echo "O cavalo andou.";
	}
}

$cavalo = new Cavalo();
$cavalo->Andar();
?>