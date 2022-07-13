<h1>Lista de Utilizadores</h1>
<p class="lead">Lista de utilizadores registados na base de dados.</p>
<p><a href="admin.php?op=2&opt=2" class="btn btn-danger">Adicionar</a></p>
<hr>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Morada</th>
				<th>Tipo</th>
				<th>Validaçâo</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $utilizadores->fetch(PDO::FETCH_ASSOC))
				{
					echo "<tr>
							<td>$row[idutilizador]</td>
							<td>$row[nome]</td>
							<td>$row[email]</td>
							<td>$row[telefone]</td>
							<td>$row[morada]</td>
							<td>$row[tipo]</td>
                            <td>$row[valido]</td>
							<td><a href='admin.php?op=2&opt=3&id=$row[idutilizador]' class='btn btn-info'>Editar</a></td>
							<td>
								<form class='delete' method='POST'>
									<input type='hidden' id='xpto$row[idutilizador]' name='xpto' value='$row[idutilizador]'>
									<input type='submit' class='btn btn-danger' value='Apagar'>
								</form>
							</td>
						</tr>";
				}
			?>
		</tbody>
	</table>
<div>
<hr>

<script>
	$(".delete").submit(function(event){
		event.preventDefault();
		var id = $(event.target).find('input:hidden[name=xpto]').attr('value');
		var resposta = confirm("Tem a certeza que deseja apagar o utilizador "+id+"?");
		if (resposta == true) {
			window.location.href = "admin.php?op=2&opt=4&id="+id;
		}
	});
</script>