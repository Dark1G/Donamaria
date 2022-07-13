<?php

class Comentario
{
	protected $tabela = "comentario";
	private $db;

	public function __construct()
	{
		try
		{
		    $this->db = new PDO('mysql:host=localhost;dbname=donamaria;', 'root', '');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel comunicar com a base de dados...</strong>
                  </div>";
		}
	}

	/************************************************
	 * Método que retorna todos os comentários da BD	*
	 ************************************************/
	public function getAllComent()
	{
		try
		{
			return $this->db->query("SELECT $this->tabela.*, utilizador.nome AS 'nomeutilizador'
									 FROM $this->tabela JOIN utilizador ON $this->tabela.idutilizador = utilizador.idutilizador");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar os comentários da base de dados...</strong>
                  </div>";
		}
	}

	/********************************************************
	 * Método que retorna um comentário de acordo com o ID	*
	 ********************************************************/
	public function getComentByID($id)
	{
		try
		{
			$comentario = $this->db->query("SELECT $this->tabela.*, utilizador.nome AS 'nomeutilizador'
									 FROM $this->tabela JOIN utilizador ON $this->tabela.idutilizador = utilizador.idutilizador
									 WHERE $this->tabela.idcomentario = $id");
			return $comentario->fetch(PDO::FETCH_ASSOC);
		} catch(PDOException $e) {
			echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar o comentário da base de dados...</strong>
                  </div>";
		}
	}

	/********************************************
	 *  Método que insere um comentário na BD	*
	 ********************************************/
	public function createComent($dados)
	{
		try
		{
		    return  $this->db->query("INSERT INTO $this->tabela(mensagem)
		    						  VALUES('$dados[mensagem]')");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel inserir o comentário na base de dados...</strong>
                  </div>";
		}
	}

	/***********************************************************
	 * Método que apaga um comentário da BD de acordo com o ID *
	 ***********************************************************/
	public function deleteComent($id)
	{
		try
		{
		    return $this->db->query("DELETE FROM $this->tabela WHERE idcomentario = $id");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel eliminar o comentário na base de dados...</strong>
                  </div>";
		}
	}
}
?>