<?php

namespace App\Model;

class ProdutoDao {

	public function create(Produto $p) {
		$sql = "INSERT INTO produtos(nome, descricao) VALUES (?,?)"; //As interrogações são bindParam

		$stmt = Conexao::getConn()->prepare($sql); //Preparando a Variável sql
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());
		$stmt->execute();
	}
	public function read() {
		$sql = "SELECT * FROM produtos";
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			//Verifica com o método rowCount se retorna algum resultado
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); //Retorna uma array com todos os registros
			return $resultado;
		} else {
			return [];
		}
	}
	public function update(Produto $p) {
		$sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());
		$stmt->bindValue(3, $p->getId());
		$stmt->execute();
	}
	public function delete($id) {
		$sql = "DELETE FROM produtos WHERE id = ?";
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();
	}
}
?>