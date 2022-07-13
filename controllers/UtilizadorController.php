<?php

class UtilizadorController
{
	private $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function index()
	{
		return $this->model->getAllUsers();
	}
    
    public function login()
	{
		return $this->model->verifyLogin();
	}

	public function findOrFail($id)
	{
		return $this->model->getUserByID($id);
	}

	public function save($dados)
	{
		if ($this->model->createUser($dados))
			return 1;
		else
			return 0;
	}
    
    public function saveclient($dados)
	{
		if ($this->model->createClient($dados))
			return 1;
		else
			return 0;
	}

	public function edit($dados)
	{
		if ($this->model->updateUser($dados))
			return 1;
		else
			return 0;
	}

	public function destroy($id)
	{
		if ($this->model->deleteUser($id))
			return 1;
		else
			return 0;
	}
}
?>