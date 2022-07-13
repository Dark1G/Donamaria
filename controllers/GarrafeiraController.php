<?php

class GarrafeiraController
{
	private $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function index()
	{
		return $this->model->getAllGarrafeira();
	}

	public function findOrFail($id)
	{
		return $this->model->getGarrafeiraByID($id);
	}

	public function save($dados)
	{
		if ($this->model->createGarrafeira($dados))
			return 1;
		else
			return 0;
	}

	public function edit($dados)
	{
		if ($this->model->updateGarrafeira($dados))
			return 1;
		else
			return 0;
	}

	public function destroy($id)
	{
		if ($this->model->deleteGarrafeira($id))
			return 1;
		else
			return 0;
	}
}
?>