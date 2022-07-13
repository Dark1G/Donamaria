<?php

class GarrafeiraView
{
	private $controller;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function listaGarrafeira()
	{
		return array('views/garrafeira/index.inc.php', $this->controller->index());
	}
    
    public function listaGarrafeiraPedido()
	{
		return array('restaurante.php', $this->controller->index());
	}
    
    public function listaGarrafeiraClientes()
	{
		return array('views/garrafeira/indexclient.inc.php', $this->controller->index());
	}

	public function criaGarrafeira()
	{
		return array('views/garrafeira/create.inc.php');
	}

	public function insereGarrafeira($dados)
	{
		return $this->controller->save($dados);
	}

	public function editaGarrafeira($id)
	{
		return array('views/garrafeira/edit.inc.php', $this->controller->findOrFail($id));
	}

	public function atualizaGarrafeira($dados)
	{
		return $this->controller->edit($dados);
	}

	public function apagaGarrafeira($id)
	{
		$this->controller->destroy($id);
		return array('views/garrafeira/index.inc.php', $this->controller->index());
	}
}
?>