<?php

class Garrafeira
{
	protected $tabela = "garrafeira";
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
	 * Método que retorna todas as garrafas da BD	*
	 ************************************************/
	public function getAllGarrafeira()
	{
		try
		{
			return $this->db->query("SELECT $this->tabela.* FROM $this->tabela");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar as garrafas da base de dados...</strong>
                  </div>";
		}
	}

	/********************************************************
	 * Método que retorna uma garrafa de acordo com o ID	*
	 ********************************************************/
	public function getGarrafeiraByID($id)
	{
		try
		{
			$produto = $this->db->query("SELECT $this->tabela.* FROM $this->tabela WHERE $this->tabela.idgarrafeira = $id"); 
			return $produto->fetch(PDO::FETCH_ASSOC);
		} catch(PDOException $e) {
			echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar a garrafa da base de dados...</strong>
                  </div>";
		}
	}

	/****************************************
	 * Método que insere uma garrfa na BD	*
	 ****************************************/
	public function createGarrafeira($dados)
	{
		try
		{
		    return  $this->db->query("INSERT INTO $this->tabela(nome, regiao, tipo, ano, descricao, preco, img)
		    						  VALUES('$dados[nome]', '$dados[regiao]', '$dados[tipo]', '$dados[ano]', '$dados[descricao]', '$dados[preco]', '$dados[img]')");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel inserir a garrafa na base de dados...</strong>
                  </div>";
		}
	}

	/********************************************
	 * Método que atualiza uma garrafa da BD	*
	 ********************************************/
	public function updateGarrafeira($dados)
	{
		try
		{
		    return $this->db->query("UPDATE $this->tabela
		    						 	SET nome = '$dados[nome]',
		    						  	 	regiao = '$dados[regiao]',
		    						  	 	tipo = '$dados[tipo]',
		    						  	 	ano = '$dados[ano]',
		    						  	 	descricao = '$dados[descricao]',
		    						  	 	preco = '$dados[preco]',
                                            img = '$dados[img]'
		    						 	WHERE idgarrafeira = '$dados[idgarrafeira]'");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel actualizar a garrafa na base de dados...</strong>
                  </div>";
		}
	}

	/********************************************************
	 * Método que apaga uma garrfa da BD de acordo com o ID *
	 ********************************************************/
	public function deleteGarrafeira($id)
	{
		try
		{
		    return $this->db->query("DELETE FROM $this->tabela WHERE idgarrafeira = $id");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel apagar a garrafa da base de dados...</strong>
                  </div>";
		}
	}
}
?>