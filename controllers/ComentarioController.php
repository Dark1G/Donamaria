<?php

class ComentarioController
{
	private $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function index()
	{
		return $this->model->getAllComent();
	}

	public function findOrFail($id)
	{
		return $this->model->getComentByID($id);
	}

	public function save($dados)
	{
		if ($this->model->createComent($dados))
			return 1;
		else
			return 0;
	}

	public function edit($dados)
	{
		if ($this->model->updateComent($dados))
			return 1;
		else
			return 0;
	}

	public function destroy($id)
	{
		if ($this->model->deleteComent($id))
			return 1;
		else
			return 0;
	}
}
?>