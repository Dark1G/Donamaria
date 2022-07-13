<?php

class ComentarioView
{
	private $controller;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function listaComentarios()
	{
		return array('views/comentario/index.inc.php', $this->controller->index());
	}
    
    public function listaComentario()
	{
		return array('views/comentario/comentario.inc.php', $this->controller->index());
	}

	public function criaComentario()
	{
		return array('views/comentario/create.inc.php');
	}

	public function insereComentario($dados)
	{
		return $this->controller->save($dados);
	}

	public function editaComentario($id)
	{
		return array('views/comentario/edit.inc.php', $this->controller->findOrFail($id));
	}

	public function atualizaComentario($dados)
	{
		return $this->controller->edit($dados);
	}

	public function apagaComentario($id)
	{
		$this->controller->destroy($id);
		return array('views/comentario/index.inc.php', $this->controller->index());
	}
}
?>