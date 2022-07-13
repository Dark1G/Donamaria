<?php

class Utilizador
{
	protected $tabela = "utilizador";
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

	/****************************************************
	 *  Método que retorna todos os utilizadores da BD	*
	 ****************************************************/
	public function getAllUsers()
	{
		try
		{
			return $this->db->query("SELECT $this->tabela.* FROM $this->tabela");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar os utilizadores da base de dados...</strong>
                  </div>";
		}
	}

	/********************************************************
	 *  Método que retorna um utilizador de acordo com o ID	*
	 ********************************************************/
	public function getUserByID($id)
	{
		try
		{
			$utilizador = $this->db->query("SELECT $this->tabela.* FROM $this->tabela WHERE $this->tabela.idutilizador = $id"); 
			return $utilizador->fetch(PDO::FETCH_ASSOC);
		} catch(PDOException $e) {
			echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar o utilizador da base de dados...</strong>
                  </div>";
		}
	}
    
    /*public function verifyLogin($utilizador, $password)
    {
        $login = $this->db->query("SELECT * FROM utilizador WHERE utilizador = $utilizador AND password = $password");

        return $login->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
			echo "<strong>Ups! Ocorreu um erro</strong>... [ERROR: ".$e->getMessage()."]";
		}
    }*/

	/********************************************
	 *  Método que insere um utilizador na BD	*
	 ********************************************/
	public function createUser($dados)
	{
		try
		{
		    return  $this->db->query("INSERT INTO $this->tabela(nome, email, password, telefone, morada, tipo, valido)
		    						  VALUES('$dados[nome]', '$dados[email]', '$dados[password]', '$dados[telefone]', '$dados[morada]', '$dados[tipo]', '$dados[valido]')");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel registar o utilizador na base de dados...</strong>
                  </div>";
		}
	}
    
    public function createClient($dados)
	{
		try
		{
		    return  $this->db->query("INSERT INTO $this->tabela(nome, email, password, telefone, morada)
		    						  VALUES('$dados[nome]', '$dados[email]', '$dados[password]', '$dados[telefone]', '$dados[morada]')");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel registar o utilizador na base de dados...</strong>
                  </div>";
		}
	}

	/********************************************
	 *  Método que atualiza um utilizador da BD	*
	 ********************************************/
	public function updateUser($dados)
	{
		try
		{
		    return $this->db->query("UPDATE $this->tabela
		    						 	SET nome = '$dados[nome]',
		    						  	 	email = '$dados[email]',
		    						  	 	telefone = '$dados[telefone]',
		    						  	 	morada = '$dados[morada]',
		    						  	 	tipo = '$dados[tipo]',
                                            valido = '$dados[valido]'
		    						 	WHERE idutilizador = '$dados[idutilizador]'");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel actualizar o utilizador na base de dados...</strong>
                  </div>";
		}
	}

	/***********************************************************
	 * Método que apaga um utilizador da BD de acordo com o ID *
	 ***********************************************************/
	public function deleteUser($id)
	{
		try
		{
		    return $this->db->query("DELETE FROM $this->tabela WHERE idutilizador = $id");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel apagar o utilizador na base de dados...</strong>
                  </div>";
		}
	}
}
?>