<?php
    session_start();
        include('Funções/verificarInput.php');

        if(isset($_POST['enviar'])){                
        
            $msg=input($_POST['Msg']);

                if(!empty($msg)){
                    if(file_exists($_FILES['img']['tmp_name'])){
                        $formatosPermitido=array("png", "jpeg", "jpg");//Tipos de imagem permitidas
                        $extensao=pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);//verficando a extenção
                
                            if(in_array($extensao, $formatosPermitido)){
                                    $pasta="../images/upload/";
                                    $arquivoTemporario= $_FILES['img']['tmp_name'];
                                    $novoNome=uniqid().".$extensao";
                                    
                                        if(move_uploaded_file($arquivoTemporario, $pasta.$novoNome)){//Enviando a imagem para a pasta UPLOAD
                                            //Não vai executar nada!
                                            }else{
                                                $_SESSION['msg']="<span>Falha em enviar imagem </span>";
                                                    header("Location: ../html/mensagem.php");
                                                    exit;
                                                }
                                    }else{
                                        $_SESSION['msg']="<span>Formato não permitido </span>";
                                        header("Location: ../html/mensagem.php");
                                        exit;
                                }
                            }

                        $sql="INSERT INTO Mensagem (texto, caminho_img) VALUES ('$msg', '$novoNome')";

                                if(mysqli_query($conectar, $sql)){
                                    mysqli_close($conectar);
                                        $_SESSION['msg']="<span>Mensagem enviada com sucesso!</span>";
                                        header("Location: ../html/mensagem.php");
                                        exit;

                                    }else{
                                        mysqli_close($conectar);
                                            $_SESSION['msg']="<span>Falha em enviar mensagem!</span>";
                                            header("Location: ../html/mensagem.php");
                                            exit;
                                    }
                      }else{
                        mysqli_close($conectar);
                           $_SESSION['msg']="<span>Insira uma mensagem!</span>";
                            header("Location: ../html/mensagem.php");
                            exit;
                    } 
        }     
    ?>