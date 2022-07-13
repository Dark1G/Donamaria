<h1 class="titemp">Palavras Doces</h1>
<p class="lead subtit">Aqui está a opinião geral dos nossos clientes.</p>
<p><a href="comentar.php" class="btn btn-danger">Adicionar comentário</a></p>

<div class="table-responsive">
    <table class="table">
        <tbody>
        <?php
            while ($row = $comentario->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>
                        <td> 
                            <p>$row[nomeutilizador]</p>
                            <p>$row[mensagem]</p>
                        </td>
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
    <hr>
    <hr class="linha">
</div>
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