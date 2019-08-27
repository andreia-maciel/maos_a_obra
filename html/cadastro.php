<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro</title>
    </head>
    <body class='bg-light'>
        <div class="container-fluid col-6">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header text-center">Criar uma conta</div>
                <div class="card-body">
                    <form action="../php/cadastrar.php" method="post">

                        <div>	<!-- Definir o tipo de pessoa que é o usuario-->
                            <input type="radio" value="pessoa_fisica" name="opcao" id="pessoa1" onclick='trocaCNPJ()' checked>
                            <label for="opcao">Pessoa física</label>
                            <input type="radio" value="pessoa_juridica" name="opcao" id="pessoa2" onclick='trocaCPF()'>
                            <label for="opcao">Pessoa jurídica</label>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <label class="dados" for="nome" id="nome" >Nome:</label><!--Nome-->
                                <input class="form-control" type="text" name="nome" id="inputNome" placeholder="Digite o seu nome" autofocus>
                                                        
                                <label class="dados" for="email">E-mail:</label><!--E-mail-->
                                <input class="form-control" type="email" name="email" placeholder="Digite seu E-mail" >
                        
                                <label class="dados" for="cpf" id="cpf/cnpj">CPF:</label><!--CPF-->
								<input class="inputDados form-control" type="text" name="cpf" maxlength="14" id="Inputcpf/cnpj" placeholder="Digite seu CPF" onkeydown="javascrip: fMasc(this, mCpf);">
                            </div>
                        </div>

                        <div class="form-row col-12"><!--Em linha-->
                            <div class="form-group col-md-5">
                                <label class="dados" for="uf">UF:</label><!--UF-->
                                    <div class="autocomplete">
                                        <input id="autoComplete" type="text" name="uf" class='form-control' placeholder="Digite o seu estado">
                                    </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="dados" for="cidade">Cidade:</label><!--Cidade-->
								<input class="form-control" type="text" name="cidade" placeholder="Digite sua cidade">
                            </div>

                            <div class="form-group col-md-3">
                                <label class="dados" for="cidade">CEP:</label><!--Cep-->
								<input class="form-control" type="text" name="cidade" placeholder="Digite o seu CEP">
                            </div>
                        </div><!--Fim em linha-->
                        
                        <div class="form-group">
                            <div class="col-12">
                                <label class="dados" for="endereco">Endereço: </label><!--Endereço-->
								<input class="form-control" type="text" name="endereco" placeholder="Bairro, Rua, N°">
                            </div>
                        </div>

                        <div class="form-row col-12">
                            <div class="form-group col-md-6">
                                <label class="dados" for="senha">Senha:</label><!--Senha-->
								<input class="form-control" type="password" name="senha" placeholder="Digite sua senha">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="dados" for="cpf">Repita Senha:</label><!--Repetir senha-->
								<input class="form-control" type="password" name="repitaSenha" placeholder="Repita sua senha">
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block">Cadastrar</button>

                        <div class="text-center">
                            <a href="login.php" class='d-block small mt-3'> Fazer login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
			
            <script src="../js/autoComplete.js"></script>											
			<script src="../js/mascaraCnpj.js"></script>
			<script src="../js/mascaraCpf.js"></script>
			<script src="../js/cpf_cnpj.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>