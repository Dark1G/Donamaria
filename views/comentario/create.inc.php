<h1>Insira um comentário</h1>
<p class="lead">De a sua opinião à cerca dos nossos serviços.</p>
<p><a href="palavras.php" class="btn btn-danger">Voltar atrás</a></p>
<hr>

<?php
	if (isset($_REQUEST['mensagem']))
	{
		if ($view->insereComentario(array('mensagem' => $_REQUEST['mensagem'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Comentário inserido com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao inserir comentário!</strong>
					</div>";
			}
	}
?>

<form method="POST">
	<div class="form-group">
		<label for="mensagem" class="control-label">Mensagem:</label>
		<textarea id="mensagem" name="mensagem" class="form-control" required></textarea>
	</div>
	<input type="submit" value="Comentar" class="btn btn-primary">
</form>