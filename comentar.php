<?php
    /** UTILIZADORES **/
    require_once('models/Comentario.php');
	require_once('controllers/ComentarioController.php');
	require_once('views/ComentarioView.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>dona maria</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				    <a href="index.php">
                        <img class="navbar-brand" src="images/logo.png">
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
                        <li><a class="qfix" href="empresa.php">A Empresa</a></li>
                        <li><a class="qfix" href="registar.php">Registar</a></li>
                        <li><a href="restaurante.php">Fazer<br>Pedido</a></li>
                        <li><a href="galeria.php">Fotos<br>e Vídeos</a></li>
                        <li><a href="palavras.php">Palavras<br>Doces</a></li>
                        <li><a class="qfix" href="contactos.php">Contactos</a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<main class="container">
        <div class="col">
            <?php
				if (!isset($model) || !isset($controller) || !isset($view))
				{
					$model = new Comentario();
					$controller = new ComentarioController($model);
					$view = new ComentarioView($controller);
				}

				if (isset($_REQUEST['opt']) && $_REQUEST['opt'] == 2) //criar comentário
				{
					$data = $view->criaComentario();
					include($data[0]);
				}
                require_once('views/comentario/create.inc.php');
            ?>
        </div>
	</main>
    <footer>
        <div class="col-xs-12 col-sm-12 col-md-12 footcopy">
            <div class="wrapper">
                <p class="copytxt">Copyright &copy; 2016 Filipe Silva e Ricardo Carvalho</p>
            </div>
        </div>
    </footer>
</body>
</html>