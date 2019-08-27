<?php
  session_start();
    include("Funções/verificarInput.php");
    include_once("Funções/verificarSeUsuarioExiste.php");
    include_once("Funções/verificarDadosInput.php");
    include_once("Funções/verificarSeOsInputsEstaOk.php");
    include_once("Funções/inserirDadosBD.php");
        $tudoOK=array();

        //Recebendo os dados do formulario
           foreach ($_POST as $campo => $value) {
               $$campo=$value;
           }
           
            if(isset($_POST['cpf'])){
                $cpf=input($_POST['cpf']);
                $cpf = preg_replace("/[^0-9]/", "", $cpf);//retirando o caracteres especiais
                
                    usuarioExiste($email, $cpf, "cadastroUsuario", "cpf");//verificar se o usuario já existe no banco de dados
                    
                        $tudoOK[0]=inputNome($nome);
                        $tudoOK[1]=inputEmail($email);
                        $tudoOK[2]=inputCpf($cpf);
                        $tudoOK[3]=inputUf($uf);
                        $tudoOK[4]=inputCidade($cidade);
                        $tudoOK[5]=inputSenha($senha,$repitaSenha);
                       
                       $s= ok($tudoOK); 
                        
                       if($s==1){
                        $senha=md5($senha);
                        inserir("cadastroUsuario","cpf", $nome, $email, $cpf, $uf, $cidade, $endereco,  $senha );
                       }

            }else{
                if(isset($_POST['cnpj'])){
                    $cnpj=input($_POST['cnpj']);
                    $cnpj = preg_replace("/[^0-9]/", "", $cnpj);

                         usuarioExiste($email, $cnpj, "cadastroEmpresa", "cnpj");//verificar se o usuario já existe no banco de dados
                           
                            $tudoOK[0]=inputNome($nome);
                            $tudoOK[1]=inputEmail($email);
                            $tudoOK[2]=inputCnpj($cnpj);
                            $tudoOK[3]=inputUf($uf);
                            $tudoOK[4]=inputCidade($cidade);
                            $tudoOK[5]=inputSenha($senha,$repitaSenha);
                            
                            $s= ok($tudoOK); 
                            
                            if($s==1){
                               $senha=md5($senha);
                             inserir("cadastroEmpresa","cnpj", $nome, $email, $cnpj, $uf, $cidade, $endereco,  $senha);
                            }


                }
            }


                            
                        
                        
?>