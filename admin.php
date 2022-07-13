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

				/*** DEFINIÇÃO DOS COMPORTAMENTOS DA VIEW (neste caso, UTILIZADOR) - CRIAR, EDITAR, APAGAR E LISTAR ***/
				if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 2) //criar utilizador
				{
					$data = $view->criaUtilizador();
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 3 && isset($_REQUEST['id'])) //editar utilizador
				{
					$data = $view->editaUtilizador($_REQUEST['id']);
					$utilizador = $data[1];
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 4 && isset($_REQUEST['id'])) //apagar utilizador
				{
					$data = $view->apagaUtilizador($_REQUEST['id']);
					$utilizadores = $data[1];
					include($data[0]);
				}
				else //listar utilizadores (por defeito)
				{
					$data = $view->listaUtilizadores();
					$utilizadores = $data[1];
					include($data[0]);
				}

			}
			else if (isset($_REQUEST['op']) && $_REQUEST['op'] == 3) //GERIR COMENTÁRIOS
			{
				/*** VERIFICA SE O MODEL, CONTROLLER E VIEW JÁ FORAM INICIADOS ***/
				if (!isset($model) || !isset($controller) || !isset($view))
				{
					$model = new Comentario();
					$controller = new ComentarioController($model);
					$view = new ComentarioView($controller);
				}

				/*** DEFINIÇÃO DOS COMPORTAMENTOS DA VIEW (neste caso, COMENTÁRIO) - CRIAR, EDITAR, APAGAR E LISTAR ***/
				if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 2) //criar comentário
				{
					$data = $view->criaComentario();
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 3 && isset($_REQUEST['id'])) //editar comentário
				{
					$data = $view->editaComentario($_REQUEST['id']);
					$comentario = $data[1];
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 4 && isset($_REQUEST['id'])) //apagar comentário
				{
					$data = $view->apagaComentario($_REQUEST['id']);
					$comentario = $data[1];
					include($data[0]);
				}
				else //listar comentários (por defeito)
				{
					$data = $view->listaComentarios();
					$comentario = $data[1];
					include($data[0]);
				}
			}
        
            else if (isset($_REQUEST['op']) && $_REQUEST['op'] == 4) //GERIR PEDIDO
			{
				/*** VERIFICA SE O MODEL, CONTROLLER E VIEW JÁ FORAM INICIADOS ***/
				if (!isset($model) || !isset($controller) || !isset($view))
				{
					$model = new Pedido();
					$controller = new PedidoController($model);
					$view = new PedidoView($controller);
				}

				/*** DEFINIÇÃO DOS COMPORTAMENTOS DA VIEW (neste caso, PEDIDO) - CRIAR, EDITAR, APAGAR E LISTAR ***/
				if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 2) //criar pedido
				{
					$data = $view->criaPedido();
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 3 && isset($_REQUEST['id'])) //editar pedido
				{
					$data = $view->editaPedido($_REQUEST['id']);
					$pedido = $data[1];
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 4 && isset($_REQUEST['id'])) //apagar pedido
				{
					$data = $view->apagaPedido($_REQUEST['id']);
					$pedido = $data[1];
					include($data[0]);
				}
				else //listar pedido (por defeito)
				{
					$data = $view->listaPedido();
					$pedido = $data[1];
					include($data[0]);
				}
			}
        
            else if (isset($_REQUEST['op']) && $_REQUEST['op'] == 5) //GERIR EMENTAS
			{
				/*** VERIFICA SE O MODEL, CONTROLLER E VIEW JÁ FORAM INICIADOS ***/
				if (!isset($model) || !isset($controller) || !isset($view))
				{
					$model = new Menu();
					$controller = new MenuController($model);
					$view = new MenuView($controller);
				}

				/*** DEFINIÇÃO DOS COMPORTAMENTOS DA VIEW (neste caso, EMENTA) - CRIAR, EDITAR, APAGAR E LISTAR ***/
				if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 2) //criar ementa
				{
					$data = $view->criaMenu();
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 3 && isset($_REQUEST['id'])) //editar ementa
				{
					$data = $view->editaMenu($_REQUEST['id']);
					$menus = $data[1];
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 4 && isset($_REQUEST['id'])) //apagar ementa
				{
					$data = $view->apagaMenu($_REQUEST['id']);
					$menus = $data[1];
					include($data[0]);
				}
				else //listar ementa (por defeito)
				{
					$data = $view->listaMenus();
					$menus = $data[1];
					include($data[0]);
				}
			}
        
            else if (isset($_REQUEST['op']) && $_REQUEST['op'] == 6) //GERIR GARRAFEIRA
			{
				/*** VERIFICA SE O MODEL, CONTROLLER E VIEW JÁ FORAM INICIADOS ***/
				if (!isset($model) || !isset($controller) || !isset($view))
				{
					$model = new Garrafeira();
					$controller = new GarrafeiraController($model);
					$view = new GarrafeiraView($controller);
				}

				/*** DEFINIÇÃO DOS COMPORTAMENTOS DA VIEW (neste caso, GARRAFA) - CRIAR, EDITAR, APAGAR E LISTAR ***/
				if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 2) //criar garrafa
				{
					$data = $view->criaGarrafeira();
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 3 && isset($_REQUEST['id'])) //editar garrafa
				{
					$data = $view->editaGarrafeira($_REQUEST['id']);
					$garrafeira = $data[1];
					include($data[0]);
				}
				else if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 4 && isset($_REQUEST['id'])) //apagar garrafa
				{
					$data = $view->apagaGarrafeira($_REQUEST['id']);
					$garrafeira = $data[1];
					include($data[0]);
				}
				else //listar garrafas (por defeito)
				{
					$data = $view->listaGarrafeira();
					$garrafeira = $data[1];
					include($data[0]);
				}
			}
		?>
	</main>
</body>
</html>