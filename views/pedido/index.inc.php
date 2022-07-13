<h1>Lista de Produtos</h1>
<p class="lead">Lista de produtos registados na base de dados.</p>
<hr>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Dia</th>
				<th>Hora</th>
                <th>Cliente</th>
				<th>Ementa</th>
				<th>Garrafa</th>
				<th>Apagar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $pedido->fetch(PDO::FETCH_ASSOC))
				{
					echo "<tr>
							<td>$row[idpedido]</td>
							<td>$row[dia]</td>
							<td>$row[hora]</td>
							<td>$row[nomeutilizador]</td>
							<td>$row[nomemenu]</td>
							<td>$row[nomegarrafeira]</td>
							<td>
								<form class='delete' method='POST'>
									<input type='hidden' id='xpto$row[idpedido]' name='xpto' value='$row[idpedido]'>
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
		var resposta = confirm("Tem a certeza que deseja apagar o pedido "+id+"?");
		if (resposta == true) {
			window.location.href = "admin.php?op=4&opt=4&id="+id;
		}
	});
</script>