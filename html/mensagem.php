<!DOCTYPE HTML>
<?php
 session_start();
?>
<html lang="pt-br">
	<head>
		<title> Mensagens </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			
					<link rel="stylesheet" type="text/css" href="../css/skel-noscript.css" />
		        	<link rel="stylesheet" type="text/css" href="../css/style.css" />
                    <link rel="stylesheet" type="text/css" href="../css/style-desktop.css" />
	</head>
	<body>
		<!-- Header -->
			<div id="header">
				<div id="nav-wrapper"> 
					<!-- Nav -->
					<nav id="nav">
						<ul style="margin-left: 0">
							<li><a href="home.php">Home</a></li>
                            <li><a href="mensagem.php">Nova Mensagem</a></li>
                            <li class="active"><a href="#">Novo Pedido</a></li>
						</ul>
					</nav>
				</div>
				<div class="container"> 
					
					<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Mãos a obra</a></h1>
						<span class="tag">Busca de qualidade !</span>
					</div>
				</div>
			</div>
		<!-- Header --> 

			<div class="container">
				<div class="form-group">
				   <?php
				   		if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
				   ?>
					<form action="../php/EnviarMsg.php" method="post" enctype="multipart/form-data">
							<h1><label for="Msg">Mensagem</label><br></h1>
							<textarea name="Msg" id="" rows="7" class="form-control" maxlength="500"></textarea>
							<input type="file" name="img" id=""><br>
							<input type="reset" class="btn btn-primary" value="Limpar">

							<button class="btn btn-primary" name="enviar">Enviar</button>
					</form>
				</div>
			</div>
			
      <!-- Footer -->
		<footer>
			<div id="footer">
					<div class="container">
						<section>
							<header>
								<h2>Entre em contato</h2>
								<span class="byline"> Comunique-se, participe conosco ! </span>
							</header>
							<ul class="contact">
								<li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
								<li><a href="#"><i class="fab fa-facebook-square"></i><span>Facebook</span></a></li>
							</ul>
						</section>
					</div>
				</div>
		</footer>
      </body>
</html>