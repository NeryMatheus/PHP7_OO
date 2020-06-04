<?php
/*
Serve para definir o modelo para ser usado em outras classes
Os métodos da interface devem ser públicos
 */

interface Crud {
	public function create($d);
	public function read();
	public function update();
	public function delete();
}

class Noticias implements Crud {
	public function create($d) {
		//Lógica para criar uma noticia
	}
	public function read() {
		//Lógica para ler uma noticia
	}
	public function update() {
		//Lógica para editar uma noticia
	}
	public function delete() {
		//Logica para excluir uma noticia
	}
}
?>