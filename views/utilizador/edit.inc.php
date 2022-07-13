<h1>Editar um utilizador já existente...</h1>
<p class="lead">Deverá alterar toda a informação do utilizador que pretende atualizar.</p>
<p><a href="index.php?op=2" class="btn btn-danger">Voltar atrás</a></p>
<hr>

<?php
	if (isset($_REQUEST['idutilizador']) && isset($_REQUEST['nome']) && isset($_REQUEST['email']) && isset($_REQUEST['telefone']) && isset($_REQUEST['morada']) && isset($_REQUEST['tipo']) && isset($_REQUEST['valido']))
	{
		if ($view->atualizaUtilizador(array('idutilizador' => $_REQUEST['idutilizador'], 'nome' => $_REQUEST['nome'], 'email' => $_REQUEST['email'], 'telefone' => $_REQUEST['telefone'], 'morada' => $_REQUEST['morada'], 'tipo' => $_REQUEST['tipo'], 'valido' => $_REQUEST['valido'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Utilizador atualizado com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao atualizar o utilizador!</strong>
					</div>";
			}
	}
?>

<form method="POST">
	<div class="form-group">
		<label for="idutilizador" class="control-label">ID Utilizador:</label>
		<input type="text" id="idutilizador" name="idutilizador" class="form-control" value="<?php echo $utilizador['idutilizador']; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="nome" class="control-label">Nome:</label>
		<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $utilizador['nome']; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="email" class="control-label">Email:</label>
		<input type="email" id="email" name="email" class="form-control" value="<?php echo $utilizador['email']; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="telefone" class="control-label">Telefone:</label>
		<input type="tel" id="telefone" name="telefone" class="form-control" value="<?php echo $utilizador['telefone']; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="morada" class="control-label">Morada:</label>
		<input type="text" id="morada" name="morada" class="form-control" value="<?php echo $utilizador['morada']; ?>" readonly>
	</div>
    	<div class="form-group">
		<label for="tipo" class="control-label">Permições:</label>
        <select id="tipo" name="tipo" class="form-control" required>
            <option value="<?php echo $utilizador['tipo']; ?>"><?php echo $utilizador['tipo']; ?></option>
            <option value="Cliente">Cliente</option>
            <option value="Moderador">Moderador</option>
            <option value="Administrador">Administrador</option>
        </select>
	</div>
    <div class="form-group">
		<label for="valido" class="control-label">Valida:</label>
        <select id="valido" name="valido" class="form-control" required>
            <option value="<?php echo $utilizador['valido']; ?>"><?php echo $utilizador['valido']; ?></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
        </select>
	</div>
	<input type="submit" value="Atualizar utilizador" class="btn btn-primary">
</form>