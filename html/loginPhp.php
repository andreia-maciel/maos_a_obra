<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body class='bg-light'>
    <div class="container-fluid col-6">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center text-primary">Login</div>
            <div class="card-body">
                <form action="../php/login.php" method='POST'>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name='email' placeholder='Digite seu e-mail'>
                        <label for="">Senha</label>
                        <input type="password" class="form-control" name='senha'  placeholder='Digite sua senha'>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label for="" class="form-check-label">
                                <input type="checkbox" class="form-check-input">Lembrar minha minha senha.
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block">Entrar</button>
                    
                    <div class="text-center">
                        <a href="cadastro.php" class='d-block small mt-3'> Criar uma conta</a>
                        <a href="recuperar.php" class='d-block small'> Esqueceu a senha</a>
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