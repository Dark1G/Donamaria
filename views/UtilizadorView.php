<?php

class UtilizadorView
{
	private $controller;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function listaUtilizadores()
	{
		return array('views/utilizador/index.inc.php', $this->controller->index());
	}
    
    public function verificarLogin()
	{
		return array('views/utilizador/login.inc.php', $this->controller->login());
	}

	public function criaUtilizador()
	{
		return array('views/utilizador/create.inc.php');
	}

	public function insereUtilizador($dados)
	{
		return $this->controller->save($dados);
	}
    
    public function criaCliente()
	{
		return array('views/utilizador/createclient.inc.php');
	}

	public function insereCliente($dados)
	{
		return $this->controller->saveclient($dados);
	}

	public function editaUtilizador($id)
	{
		return array('views/utilizador/edit.inc.php', $this->controller->findOrFail($id));
	}

	public function atualizaUtilizador($dados)
	{
		return $this->controller->edit($dados);
	}

	public function apagaUtilizador($id)
	{
		$this->controller->destroy($id);
		return array('views/utilizador/index.inc.php', $this->controller->index());
	}
}
?>