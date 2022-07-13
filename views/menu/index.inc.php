<h1>Lista de Ementa</h1>
<p class="lead">Lista de ementas registados na base de dados.</p>
<p><a href="admin.php?op=5&opt=2" class="btn btn-danger">Adicionar</a></p>
<hr>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Preço</th>
				<th>Imagem</th>
				<th>Editar</th>
				<th>Apagar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $menus->fetch(PDO::FETCH_ASSOC))
				{
					echo "<tr>
							<td>$row[idmenu]</td>
							<td>$row[nome]</td>
							<td>$row[descricao]</td>
							<td>$row[preco]€</td>
							<td><img class=\"adminmenu\" src=\"$row[img]\"></td>
							<td><a href='admin.php?op=5&opt=3&id=$row[idmenu]' class='btn btn-info'>Editar</a></td>
							<td>
								<form class='delete' method='POST'>
									<input type='hidden' id='xpto$row[idmenu]' name='xpto' value='$row[idmenu]'>
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
		var resposta = confirm("Tem a certeza que deseja apagar a ementa "+id+"?");
		if (resposta == true) {
			window.location.href = "admin.php?op=5&opt=4&id="+id;
		}
	});
</script>