<h1 class="titemp">Registar</h1>
<p class="lead subtit">Deverá inserir toda a sua informação verdadeira para a conta ser validada.</p>
<p><a href="restaurante.php" class="btn btn-danger">Fazer pedidos</a></p>
<hr>

<?php
	if (isset($_REQUEST['nome']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['telefone']) && isset($_REQUEST['morada']))
	{
		if ($view->insereCliente(array('nome' => $_REQUEST['nome'], 'email' => $_REQUEST['email'], 'password' => $_REQUEST['password'], 'telefone' => $_REQUEST['telefone'], 'morada' => $_REQUEST['morada'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Utilizador inserido com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao inserir utilizador!</strong>
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
		<label for="email" class="control-label">Email:</label>
		<input type="email" id="email" name="email" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="password" class="control-label">Password:</label>
		<input type="password" id="password" name="password" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="telefone" class="control-label">Telefone:</label>
		<input type="tel" id="telefone" name="telefone" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="morada" class="control-label">Morada:</label>
		<input type="text" id="morada" name="morada" class="form-control">
	</div>
	<input type="submit" value="Registar" class="btn btn-primary">
</form>