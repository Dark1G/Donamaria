<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>dona maria</title>
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
	<main>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/foto1.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="images/foto2.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="images/foto3.jpg" alt="Flower">
                </div>

                <div class="item">
                    <img src="images/foto4.jpg" alt="Flower">
                </div>
                
                <div class="item">
                    <img src="images/foto5.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="images/foto1.jpg" alt="Flower">
                </div>

                <div class="item">
                    <img src="images/foto1.jpg" alt="Flower">
                </div>
                
                <div class="item">
                    <img src="images/foto1.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="images/foto1.jpg" alt="Flower">
                </div>

                <div class="item">
                    <img src="images/foto1.jpg" alt="Flower">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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