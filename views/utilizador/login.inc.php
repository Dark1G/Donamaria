<?php
	/*** INCLUDE DE TODOS OS MODELS, CONTROLLERS E VIEWS ***/
    
    /** UTILIZADORES **/
    require_once('models/Utilizador.php');
	require_once('controllers/UtilizadorController.php');
	require_once('views/UtilizadorView.php');
    
    /** PEDIDOS **/
    require_once('models/Pedido.php');
	require_once('controllers/PedidoController.php');
	require_once('views/PedidoView.php');

    /** COMENTÁRIOS **/
    require_once('models/Comentario.php');
	require_once('controllers/ComentarioController.php');
	require_once('views/ComentarioView.php');
    
    /** EMENTAS **/
    require_once('models/Menu.php');
	require_once('controllers/MenuController.php');
	require_once('views/MenuView.php');
    
    /** GARRAFAS **/
    require_once('models/Garrafeira.php');
	require_once('controllers/GarrafeiraController.php');
	require_once('views/GarrafeiraView.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel de Administração</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				    <a href="admin.php">
                        <p class="navbar-brand">Painel de Administração</p>
                    </a>
                    <div class="navbar-right">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php">Home</a></li>
                        <li><a href="admin.php?op=2">Utilizadores</a></li>
                        <li><a href="admin.php?op=3">Comentários</a></li>
                        <li><a href="admin.php?op=4">Pedidos</a></li>
                        <li><a href="admin.php?op=5">Ementas</a></li>
                        <li><a href="admin.php?op=6">Garrafeira</a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>

	<main class="container">
		<?php
			/*** VALORES DE OP (1 - LOGIN, 2 - GERIR UTILIZADORES, 3 - GERIR COMÉNTARIOS, 4 - GERIR PEDIDOS, 5 - GERIR EMENTAS,
            6 - GERIR GARRAFEIRA) ***/
			if(isset($_REQUEST['op']) && $_REQUEST['op'] == 2) //GERIR UTILIZADORES
			{
				/*** VERIFICA SE O MODEL, CONTROLLER E VIEW JÁ FORAM INICIADOS ***/
				if (!isset($model) || !isset($controller) || !isset($view))
				{
					$model = new Utilizador();
					$controller = new UtilizadorController($model);
					$view = new UtilizadorView($controller);
                    
                    
                }
            }
		?>
	</main>
</body>
</html>