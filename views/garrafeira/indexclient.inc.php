<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Região</th>
				<th>Tipo</th>
				<th>Ano</th>
				<th>Descrição</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $garrafeira->fetch(PDO::FETCH_ASSOC))
				{
					echo "<tr>
                            <td>$row[nome]</td>
							<td>$row[regiao]</td>
							<td>$row[tipo]</td>
							<td>$row[ano]</td>
							<td>$row[descricao]</td>
							<td>$row[preco]€</td>
                            <td><img class=\"admingarraf\" src=\"$row[img]\"></td>
						</tr>";
				}
			?>
		</tbody>
	</table>
<div>
<hr>