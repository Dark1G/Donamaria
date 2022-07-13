<h1>Adicionar uma nova ementa</h1>
<p class="lead">Insira toda a informação sobre a ementa.</p>
<p><a href="admin.php?op=5" class="btn btn-danger">Voltar atrás</a></p>
<hr>

<?php
	if (isset($_REQUEST['nome']) && isset($_REQUEST['descricao']) && isset($_REQUEST['preco']) && isset($_REQUEST['img']))
	{
		if ($view->insereMenu(array('nome' => $_REQUEST['nome'], 'descricao' => $_REQUEST['descricao'], 'preco' => $_REQUEST['preco'], 'img' => $_REQUEST['img'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Ementa inserido com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao inserir ementa!</strong>
					</div>";
			}
	}
?>

<form method="POST">
	<div class="form-group">
		<label for="nome" class="control-label">Nome:</label>
		<input type="text" id="nome" name="nome" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="descricao" class="control-label">Descrição:</label>
		<textarea id="descricao" name="descricao" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="preco" class="control-label">Preço:</label>
		<input type="text" id="preco" name="preco" class="form-control">
	</div>
	<div class="form-group">
		<label for="img" class="control-label">Imagem:</label>
		<input type="text" id="img" name="img" class="form-control">
	</div>
	<input type="submit" value="Inserir ementa" class="btn btn-primary">
</form>