<?php
	if (isset($_REQUEST['dia']) && isset($_REQUEST['hora']) && isset($_REQUEST['idmenu']) && isset($_REQUEST['idgarrafeira']))
	{
		if ($view->inserePedido(array('dia' => $_REQUEST['dia'], 'hora' => $_REQUEST['hora'], 'idmenu' => $_REQUEST['idmenu'], 'idgarrafeira' => $_REQUEST['idgarrafeira'])) == 1) {
				echo "<div class='alert alert-success'>
  						<strong>Pedido feito com sucesso!</strong>
					  </div>";
			} else {
				echo "<div class='alert alert-danger'>
					  <strong>Erro ao fazer pedido!</strong>
					</div>";
			}
	}
?>

<form method="POST">
	<div class="form-group">
		<label for="dia" class="control-label">Dia:</label>
		<input type="date" id="dia" name="dia" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="hora" class="control-label">Hora:</label>
		<input type="time" id="hora" name="hora" class="form-control">
	</div>
    <div class="form-group">
		<label for="idmenu" class="control-label">Ementa:</label>
        <select id="idmenu" name="idmenu" class="form-control" required>
            <?php
            
                require_once('models/Menu.php');
                require_once('controllers/MenuController.php');
                require_once('views/MenuView.php');
            
                if (!isset($modelmenu) || !isset($controllermenu) || !isset($viewmenu))
                {
                    $modelmenu = new Menu();
                    $controllermenu = new MenuController($modelmenu);
                    $viewmenu = new MenuView($controllermenu);
                    $datamenu = $viewmenu->listaMenusPedido();
                    $menus = $datamenu[1];
                    include($datamenu[0]);
                }
            
                while ($row = $menus->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<option value=\"$row[idmenu]\">$row[nome]</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group">
		<label for="idgarrafeira" class="control-label">Garrafa:</label>
        <select id="idgarrafeira" name="idgarrafeira" class="form-control" required>
            <option value=""></option>
            <?php
            
                require_once('models/Garrafeira.php');
                require_once('controllers/GarrafeiraController.php');
                require_once('views/GarrafeiraView.php');
            
                if (!isset($modelgarrafa) || !isset($controllergarrafa) || !isset($viewgarrafa))
                {
                    $modelgarrafa = new Garrafeira();
                    $controllergarrafa = new GarrafeiraController($modelgarrafa);
                    $viewgarrafa = new GarrafeiraView($controllergarrafa);
                    $datagarrafa = $viewgarrafa->listaGarrafeiraPedido();
                    $garrafeira = $datagarrafa[1];
                    include($datagarrafa[0]);
                }
            
                while ($row = $garrafeira->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<option value=\"$row[idgarrafeira]\">$row[nome]</option>";
                }
            ?>
        </select>
    </div>
	<input type="submit" value="Inserir pedido" class="btn btn-primary">
</form>