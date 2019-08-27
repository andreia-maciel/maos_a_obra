<!DOCTYPE HTML>
    <?php
    session_start();
    include("../php/Funções/verifica_login.php");
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
                <header>
                    <!-- Header -->
                        <div id="header">
                            <div id="nav-wrapper"> 
                                <!-- Nav -->
                                <nav id="nav">
                                    <ul style="margin-left: 0">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="mensagem.php">Nova Mensagem</a></li>
                                        <li class="active"><a href="#">Novo Pedido</a></li>

                                        <li id=""><a href="../php/Funções/logout.php">Sair</a></li>
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
                </header>
                
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