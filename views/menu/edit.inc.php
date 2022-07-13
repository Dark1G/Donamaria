<h1>Editar uma ementa já existente...</h1>
<p class="lead">Deverá alterar toda a informação do ementa que pretende atualizar.</p>
<p><a href="admin.php?op=5" class="btn btn-danger">Voltar atrás</a></p>
<hr>

<?php
	if (isset($_REQUEST['idmenu']) && isset($_REQUEST['nome']) && isset($_REQUEST['descricao']) && isset($_REQUEST['preco']) && isset($_REQUEST['img']))
	{
		if ($view->atualizaMenu(array('idmenu' => $_REQUEST['idmenu'], 'nome' => $_REQUEST['nome'], 'descricao' => $_REQUEST['descricao'], 'preco' => $_REQUEST['preco'], 'img' => $_REQUEST['img'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Ementa atualizado com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao atualizar ementa!</strong>
					</div>";
			}
	}
?>

<form method="POST">
	<div class="form-group">
		<label for="idmenu" class="control-label">ID Menu:</label>
		<input type="text" id="idmenu" name="idmenu" class="form-control" value="<?php echo $menus['idmenu']; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="nome" class="control-label">Nome:</label>
		<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $menus['nome']; ?>">
	</div>
	<div class="form-group">
		<label for="descricao" class="control-label">Descrição:</label>
		<textarea id="descricao" name="descricao" class="form-control"><?php echo $menus['descricao']; ?></textarea>
	</div>
	<div class="form-group">
		<label for="preco" class="control-label">Preço:</label>
		<input type="text" id="preco" name="preco" class="form-control" value="<?php echo $menus['preco']; ?>">
	</div>
	<div class="form-group">
		<label for="img" class="control-label">Path da Imagem:</label>
		<input type="text" id="img" name="img" class="form-control" value="<?php echo $menus['img']; ?>">
	</div>
	<input type="submit" value="Atualizar ementa" class="btn btn-primary">
</form>