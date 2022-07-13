<?php

class PedidoController
{
	private $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function index()
	{
		return $this->model->getAllPedido();
	}

	public function findOrFail($id)
	{
		return $this->model->getPedidoByID($id);
	}

	public function save($dados)
	{
		if ($this->model->createPedido($dados))
			return 1;
		else
			return 0;
	}

	public function edit($dados)
	{
		if ($this->model->updatePedido($dados))
			return 1;
		else
			return 0;
	}

	public function destroy($id)
	{
		if ($this->model->deletePedido($id))
			return 1;
		else
			return 0;
	}
}
?>