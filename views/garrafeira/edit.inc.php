<h1>Editar um garrafa já existente...</h1>
<p class="lead">Deverá alterar toda a informação da garrafa que pretende atualizar.</p>
<p><a href="admin.php?op=6" class="btn btn-danger">Voltar atrás</a></p>
<hr>

<?php
	if (isset($_REQUEST['idgarrafeira']) && isset($_REQUEST['nome']) && isset($_REQUEST['regiao']) && isset($_REQUEST['tipo']) && isset($_REQUEST['ano']) && isset($_REQUEST['descricao']) && isset($_REQUEST['preco']) && isset($_REQUEST['img']))
	{
		if ($view->atualizaGarrafeira(array('idgarrafeira' => $_REQUEST['idgarrafeira'], 'nome' => $_REQUEST['nome'], 'regiao' => $_REQUEST['regiao'], 'tipo' => $_REQUEST['tipo'], 'ano' => $_REQUEST['ano'], 'descricao' => $_REQUEST['descricao'], 'preco' => $_REQUEST['preco'], 'img' => $_REQUEST['img'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Garrafa atualizada com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao atualizar garrafa!</strong>
					</div>";
			}
	}
?>

<form method="POST">
	<div class="form-group">
		<label for="idgarrafeira" class="control-label">ID Garrafeira:</label>
		<input type="text" id="idgarrafeira" name="idgarrafeira" class="form-control" value="<?php echo $garrafeira['idgarrafeira']; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="nome" class="control-label">Nome:</label>
		<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $garrafeira['nome']; ?>">
	</div>
	<div class="form-group">
		<label for="regiao" class="control-label">Região:</label>
		<input type="text" id="regiao" name="regiao" class="form-control" value="<?php echo $garrafeira['regiao']; ?>">
	</div>
	<div class="form-group">
		<label for="tipo" class="control-label">Tipo:</label>
		<input type="text" id="tipo" name="tipo" class="form-control" value="<?php echo $garrafeira['tipo']; ?>">
	</div>
	<div class="form-group">
		<label for="ano" class="control-label">Ano:</label>
		<input type="text" id="ano" name="ano" class="form-control" value="<?php echo $garrafeira['ano']; ?>">
	</div>
	<div class="form-group">
		<label for="descricao" class="control-label">Descrição:</label>
		<textarea id="descricao" name="descricao" class="form-control"><?php echo $garrafeira['descricao']; ?></textarea>
	</div>
	<div class="form-group">
		<label for="preco" class="control-label">Preço:</label>
		<input type="text" id="preco" name="preco" class="form-control" value="<?php echo $garrafeira['preco']; ?>">
	</div>
    <div class="form-group">
		<label for="img" class="control-label">Imagem:</label>
		<input type="text" id="img" name="img" class="form-control" value="<?php echo $garrafeira['img']; ?>">
	</div>
	<input type="submit" value="Atualizar garrafa" class="btn btn-primary">
</form>