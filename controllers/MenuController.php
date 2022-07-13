<?php

class MenuController
{
	private $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function index()
	{
		return $this->model->getAllMenus();
	}

	public function findOrFail($id)
	{
		return $this->model->getMenuByID($id);
	}

	public function save($dados)
	{
		if ($this->model->createMenu($dados))
			return 1;
		else
			return 0;
	}

	public function edit($dados)
	{
		if ($this->model->updateMenu($dados))
			return 1;
		else
			return 0;
	}

	public function destroy($id)
	{
		if ($this->model->deleteMenu($id))
			return 1;
		else
			return 0;
	}
}
?>