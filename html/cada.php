<!DOCTYPE HTML>
	<?php
	session_start();
	?>
<html lang="pt-br">
	<head>
		<title>Cadastre-se</title>

		<meta http-equiv="content-type" charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

			<link rel="stylesheet" type="text/css" href="../css/style.css" />
			<link rel="stylesheet" type="text/css" href="../css/skel-noscript.css" />
			<link rel="stylesheet" type="text/css" href="../css/style-desktop.css" />
			<link rel="stylesheet" type="text/css" href="../css/Autocomplete.css" />
	</head>
	<body>

	<!-- Header -->
		<div id="header">
				<div id="nav-wrapper"> 
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li><a href="empresas.html">Empresas</a></li>
							<li><a href="sobre.html">Sobre</a></li>
							
							<li id="cadastro"><a href="cadastro.php">Cadastro</a></li>
							<li id="login"><a href="loginHTML.php">Entre</a></li>
						</ul>
						</nav>
					</div>

				<div class="container"> 
					<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Mãos à obra</a></h1>
						<span class="tag">Busca de qualidade !</span>
					</div>
				</div>
			</div>
		<!-- Header --> 

		<!-- Main -->
			<div id="main">
				<div class="container">
					<div class="row">
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<h2>Cadastre-se</h2>
								
								<!--Inicio do formulario-->
								<form id="cadastre" action="../php/cadastrar.php" method="POST">
									<fieldset id="formulario">
																
												<?php
											
													if(isset($_SESSION['msg'])){
														echo $_SESSION['msg'];
														unset($_SESSION['msg']);
													}
												?>

											<div>	<!-- Definir o tipo de pessoa que é o usuario-->
												<input type="radio" value="pessoa_fisica" name="opcao" id="pessoa1" onclick='trocaCNPJ()' checked>
												<label for="opcao">Pessoa física</label>
												<input type="radio" value="pessoa_juridica" name="opcao" id="pessoa2" onclick='trocaCPF()'>
												<label for="opcao">Pessoa jurídica</label>
											</div>
													
											<label class="dados" for="nome" id="nome" >Nome:</label><br><!--nome-->
											<i class="fas fa-user"></i>
											<input class="inputDados" type="text" name="nome" id="inputNome" autofocus><br>
											
			
												<?php
													if(isset($_SESSION['msgNome'])){
														echo $_SESSION['msgNome'];
														unset($_SESSION['msgNome']);
													}
										
												?>
											
											<label class="dados" for="email">E-mail:</label><br><!--E-mail-->
											<i class="fas fa-envelope"></i>
											<input class="inputDados" type="email" name="email" ><br>
			
												<?php
													if(isset($_SESSION['msgEmail'])){
														echo $_SESSION['msgEmail'];
														unset($_SESSION['msgEmail']);
													}
												?>
												
											<label class="dados" for="cpf" id="cpf/cnpj">CPF:</label><br><!--CPF-->
											<i class="fas fa-fingerprint"></i>
											<input class="inputDados" type="text" name="cpf" maxlength="14" id="Inputcpf/cnpj" onkeydown="javascrip: fMasc(this, mCpf);"><br>
			
												<?php
												if(isset($_SESSION['msgCpf_Cnpj'])){
													echo $_SESSION['msgCpf_Cnpj'];
													unset($_SESSION['msgCpf_Cnpj']);
												}
												?>
			
											
											<label class="dados" for="uf">UF:</label><br><!--UF-->
											<div class="autocomplete"><i class="fas fa-flag"></i>
													<input id="autoComplete" type="text" name="uf" >
											</div><br>

												<?php
												if(isset($_SESSION['msgUf'])){
													echo $_SESSION['msgUf'];
													unset($_SESSION['msgUf']);
												}
												?>

											<label class="dados" for="cidade">Cidade:</label><br><!--Cidade-->
											<i class="fas fa-city"></i>
											<input class="inputDados" type="text" name="cidade"><br>
			
												<?php
												if(isset($_SESSION['msgCity'])){
													echo $_SESSION['msgCity'];
													unset($_SESSION['msgCity']);
												}
												?>

											<label class="dados" for="endereco">Endereço: </label><br><!--Endereço-->
											<i class="fas fa-map-marker-alt"></i>
											<input class="inputDados" type="text" name="endereco"><br>
									
											<label class="dados" for="cpf">Senha:</label><br><!--Senha-->
											<i class="fas fa-unlock-alt"></i>
											<input class="inputDados" type="password" name="senha"><br>
				
												<?php
													if(isset($_SESSION['msgSenha'])){
														echo $_SESSION['msgSenha'];
														unset($_SESSION['msgSenha']);
													}
												?>
                            
											<label class="dados" for="cpf">Repita Senha:</label><br><!--Repetir senha-->
											<i class="fas fa-unlock-alt"></i>
											<input class="inputDados" type="password" name="repitaSenha"><br>
										
											<input type="submit" value="Enviar" name="enviar">
									</fieldset>
								</form>
					<!--Fim  do formulario-->
					</div>
				</div>
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
			<script src="../js/autoComplete.js"></script>											
			<script src="../js/mascaraCnpj.js"></script>
			<script src="../js/mascaraCpf.js"></script>
			<script src="../js/cpf_cnpj.js"></script>
	</body>
</html>