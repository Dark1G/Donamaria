<h1>Adicionar um novo utilizador</h1>
<p class="lead">Insira toda a informação sobre o utilizador.</p>
<p><a href="admin.php?op=2" class="btn btn-danger">Voltar atrás</a></p>
<hr>

<?php
	if (isset($_REQUEST['nome']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['telefone']) && isset($_REQUEST['morada']) && isset($_REQUEST['tipo']) && isset($_REQUEST['valido']))
	{
		if ($view->insereUtilizador(array('nome' => $_REQUEST['nome'], 'email' => $_REQUEST['email'], 'password' => $_REQUEST['password'], 'telefone' => $_REQUEST['telefone'], 'morada' => $_REQUEST['morada'], 'tipo' => $_REQUEST['tipo'], 'valido' => $_REQUEST['valido'])) == 1) {
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
	<div class="form-group">
		<label for="tipo" class="control-label">Permições:</label>
        <select id="tipo" name="tipo" class="form-control" required>
            <option value="Cliente">Cliente</option>
            <option value="Moderador">Moderador</option>
            <option value="Administrador">Administrador</option>
        </select>
	</div>
    <div class="form-group">
		<label for="valido" class="control-label">Valida:</label>
        <select id="valido" name="valido" class="form-control" required>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
        </select>
	</div>
	<input type="submit" value="Registar utilizador" class="btn btn-primary">
</form>