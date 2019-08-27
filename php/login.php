<?php
    session_start();
        include('Funções/verificarInput.php');
        include('Funções/loginSenhaEmail.php');

        $email = input($_POST['email']);
        $senha = md5(input($_POST['senha']));
        
            if(empty($email) || empty($senha)){
                $_SESSION['nao_autenticado'] = 'Prencha os campos E-mail/Senha';
                header('Location: ../html/loginHTML.php');
                exit();
                }
                  
                $row=login("cadastroUsuario", $email, $senha);

                    if($row == 1){
                        $_SESSION['usuario'] = $usuario =array($email,$senha);
                        header('Location: ../html/home.php');
                        exit();
                    } else {
                        $row=login("cadastroEmpresa", $email, $senha);

                        if($row == 1){
                            $_SESSION['usuario'] = $usuario =array($email,$senha);
                            header('Location: ../html/home.php');
                            exit();

                          }else{
                            $_SESSION['nao_autenticado'] = 'E-mail ou senha incorreto';
                            header('Location:  ../html/loginHTML.php');
                            exit();
                          }
            }
?>