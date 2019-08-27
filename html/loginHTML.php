<!DOCTYPE html>
    <?php
    session_start();
    ?>
    <html>
        <head>
            
            <title>Login</title>
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
                                <h3 class="title">Faça seu Login</h3>

                                    <?php
                                        if(isset($_SESSION['nao_autenticado']))
                                                echo $_SESSION['nao_autenticado'];
                                                unset($_SESSION['nao_autenticado'])
                                    
                                    ?>

                                    <form action="../php/login.php" method="POST">

                                        <label for="email">E-mail</label><br>
                                        <input name="email" name="text" autofocus=""><br>

                                        <label for="senha">Senha</label><br>
                                        <input name="senha" type="password" ><br>

                                        <button type="submit" name="entrar ">Entrar</button>
                                    </form>
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
        </body>
</html>