<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
                <th>Utilizador</th>
				<th>Mensagem</th>
				<th>Apagar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $comentario->fetch(PDO::FETCH_ASSOC))
				{
					echo "<tr>
							<td>$row[idcomentario]</td>
							<td>$row[nomeutilizador]</td>
							<td>$row[mensagem]</td>
							<td>
								<form class='delete' method='POST'>
									<input type='hidden' id='xpto$row[idcomentario]' name='xpto' value='$row[idcomentario]'>
									<input type='submit' class='btn btn-danger' value='Apagar'>
								</form>
							</td>
						</tr>";
				}
			?>
		</tbody>
	</table>
<div>

<script>
	$(".delete").submit(function(event){
		event.preventDefault();
		var id = $(event.target).find('input:hidden[name=xpto]').attr('value');
		var resposta = confirm("Tem a certeza que deseja apagar o comentário "+id+"?");
		if (resposta == true) {
			window.location.href = "admin.php?op=3&opt=4&id="+id;
		}
	});
</script>