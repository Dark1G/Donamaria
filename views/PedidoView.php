<?php

class PedidoView
{
	private $controller;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function listaPedido()
	{
		return array('views/pedido/index.inc.php', $this->controller->index());
	}

	public function criaPedido()
	{
		return array('views/pedido/create.inc.php');
	}

	public function inserePedido($dados)
	{
		return $this->controller->save($dados);
	}

	public function editaPedido($id)
	{
		return array('views/pedido/edit.inc.php', $this->controller->findOrFail($id));
	}

	public function atualizaPedido($dados)
	{
		return $this->controller->edit($dados);
	}

	public function apagaPedido($id)
	{
		$this->controller->destroy($id);
		return array('views/pedido/index.inc.php', $this->controller->index());
	}
}
?>