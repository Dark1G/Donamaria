<?php

class Pedido
{
	protected $tabela = "pedido";
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
	 * Método que retorna todos os pedidos da BD	*
	 ************************************************/
	public function getAllPedido()
	{
		try
		{
			return $this->db->query("
            SELECT $this->tabela.idpedido,$this->tabela.dia,$this->tabela.hora, (
                  SELECT nome
                   FROM utilizador
                  WHERE utilizador.idutilizador = $this->tabela.idutilizador)nomeutilizador,(
                  SELECT nome
                   FROM menu
                  WHERE menu.idmenu = $this->tabela.idmenu)nomemenu, (
                  SELECT nome
                   FROM garrafeira
                  WHERE garrafeira.idgarrafeira = $this->tabela.idgarrafeira)nomegarrafeira 
            FROM $this->tabela
            ORDER BY dia ASC");
            
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel listar os pedidos da base de dados...</strong>
                  </div>";
		}
	}

	/****************************************
	 * Método que insere um pedido na BD	*
	 ****************************************/
	public function createPedido($dados)
	{
		try
		{
		    return  $this->db->query("INSERT INTO $this->tabela(dia, hora, idmenu, idgarrafeira)
		    						  VALUES('$dados[dia]', '$dados[hora]', '$dados[idmenu]', '$dados[idgarrafeira]')");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel inserir o pedido na base de dados...</strong>
                  </div>";
		}
	}

	/*******************************************************
	 * Método que apaga um pedido da BD de acordo com o ID *
	 *******************************************************/
	public function deleteProduct($id)
	{
		try
		{
		    return $this->db->query("DELETE FROM $this->tabela WHERE idpedido = $id");
		} catch(PDOException $e) {
		    echo "<div class='alert alert-danger'>
                        <strong>Pedidos desculpa! Mas não foi possivel eliminar o pedido na base de dados...</strong>
                  </div>";
		}
	}
}
?>