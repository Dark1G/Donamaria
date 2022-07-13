<?php

class MenuView
{
	private $controller;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function listaMenus()
	{
		return array('views/menu/index.inc.php', $this->controller->index());
	}
    
    public function listaMenusPedido()
	{
		return array('restaurante.php', $this->controller->index());
	}
    
    public function listaMenusClient()
	{
		return array('views/menu/indexclient.inc.php', $this->controller->index());
	}

	public function criaMenu()
	{
		return array('views/menu/create.inc.php');
	}

	public function insereMenu($dados)
	{
		return $this->controller->save($dados);
	}

	public function editaMenu($id)
	{
		return array('views/menu/edit.inc.php', $this->controller->findOrFail($id));
	}

	public function atualizaMenu($dados)
	{
		return $this->controller->edit($dados);
	}

	public function apagaMenu($id)
	{
		$this->controller->destroy($id);
		return array('views/menu/index.inc.php', $this->controller->index());
	}
}
?>