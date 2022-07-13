<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Preço</th>
				<th>Imagem</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $menus->fetch(PDO::FETCH_ASSOC))
				{
					echo "<tr>
							<td>$row[nome]</td>
							<td>$row[descricao]</td>
							<td>$row[preco]€</td>
							<td><img class=\"adminmenu\" src=\"$row[img]\"></td>
						</tr>";
				}
			?>
		</tbody>
	</table>
<div>
<hr>