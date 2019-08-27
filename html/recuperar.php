<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Recuperar senha</title>
  </head>
  <body class='bg-dark'>
    <div class="container-fluid col-6">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center text-primary">Recuperar senha</div>
            <div class="card-body">
               <div class="text-center mt-4 mb-5">
                    <h4>Esqueceu sua senha?</h4>
                    <p>Digite seu e-mail e nós lhe enviaremos instruções sobre como redefinir sua senha.</p>
                </div>
                <form action="../php/recuperEmail.php" method='POST'>
                    <div class="form-group">
                       <label for="">E-mail</label>
                       <input type="email" class="form-control" name='email' placeholder='Digite seu E-mail'>
                    </div>
                    <button class="btn btn-primary btn-block">Recuperar senha</button>
                    <div class="text-center">
                        <a href="cadastro.php" class='d-block small mt-3'> Criar uma conta</a>
                        <a href="loginPHP.php" class='d-block small'> Login</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
     

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>