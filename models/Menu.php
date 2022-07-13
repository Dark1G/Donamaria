<?php

class Menu
{
	protected $tabela = "menu";
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
	 * Método que retorna todas as ementas da BD	*
	 ************************************************/
	public function getAllMenus()
	{
		try
		{
			return $this->db->query("SELECT $this->tabela.* FROM $this->tabela");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar as ementas da base de dados...</strong>
                  </div>";
		}
	}

	/****************************************************
	 * Método que retorna uma ementa de acordo com o ID	*
	 ****************************************************/
	public function getMenuByID($id)
	{
		try
		{
			$menus = $this->db->query("SELECT $this->tabela.* FROM $this->tabela WHERE $this->tabela.idmenu = $id"); 
			return $menus->fetch(PDO::FETCH_ASSOC);
		} catch(PDOException $e) {
			echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar a ementa da base de dados...</strong>
                  </div>";
		}
	}

	/****************************************
	 * Método que insere uma ementa na BD	*
	 ****************************************/
	public function createMenu($dados)
	{
		try
		{
		    return  $this->db->query("INSERT INTO $this->tabela(nome, descricao, preco, img)
		    						  VALUES('$dados[nome]', '$dados[descricao]', '$dados[preco]', '$dados[img]')");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel inserir a ementa na base de dados...</strong>
                  </div>";
		}
	}

	/****************************************
	 * Método que atualiza uma ementa da BD	*
	 ****************************************/
	public function updateMenu($dados)
	{
		try
		{
		    return $this->db->query("UPDATE $this->tabela
		    						 	SET nome = '$dados[nome]',
		    						  	 	descricao = '$dados[descricao]',
		    						  	 	preco = '$dados[preco]',
		    						  	 	img = '$dados[img]'
		    						 	WHERE idmenu = '$dados[idmenu]'");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel actualizar a ementa na base de dados...</strong>
                  </div>";
		}
	}

	/********************************************************
	 * Método que apaga uma ementa da BD de acordo com o ID *
	 ********************************************************/
	public function deleteMenu($id)
	{
		try
		{
		    return $this->db->query("DELETE FROM $this->tabela WHERE idmenu = $id");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel eliminar a ementa na base de dados...</strong>
                  </div>";
		}
	}
}
?>