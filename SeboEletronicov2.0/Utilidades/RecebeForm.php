<?php
/*
 File name: RecebeForm.php
 File description: gets selected form to register, change, search or delete user
 Authors: Caique Pereira, Jessica Suzuki, João Gabriel, Macário Soares, Victor Cunha.
*/ 

include_once '../Controle/UsuarioControlador.php';

switch($_POST['tipo']){
//switch action selection to be held in the register book, register, change, or delete search
    
      case "cadastrar":  $nome = $_POST['nome'];
                         $email = $_POST['email'];
                         $telefone = $_POST['telefone'];
                         $senha = $_POST['senha'];
                         
                         UsuarioControlador::salvaUsuario($nome, $email, $telefone, $senha);
                         ?>

                            <script language="Javascript" type="text/javascript">
                                alert("Usuario cadastrado com sucesso!!");
                            </script>      
                            
                            <script language = "Javascript">
                            window.location="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/entrarLogin.php";
                            </script>
                         <?php
                            
                          break;
                      
      case "alterar":   $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $telefone = $_POST['telefone'];
                        $senha = $_POST['senha'];
                        $id = $_POST['id_pessoa'];
                        $senhaVelha = $_POST['senhaAntiga'];
                        
                        UsuarioControlador::alterarCadastro($nome, $email, $telefone, $senha, $id, $senhaVelha);
                        ?>
                            
                            <script language="Javascript" type="text/javascript">
                                alert("Usuario alterado com sucesso!!");
                            </script>      
                            
                            <script language = "Javascript">
                                window.location="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/indexLogin.php";
                            </script>
                           
                        <?php
                        
                    break;
      case "deletar": $email = $_POST['email'];
                      $senha = $_POST['senha'];
                      
                      UsuarioControlador::deletaCadastro($email,$senha);
                      ?>
                            <script language="Javascript" type="text/javascript">
                                alert("Usuario excluido  com sucesso!!");
                            </script>   
                            
                            <script language = "Javascript">
                                window.location="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/site.php";
                            </script>
                      <?php
                    break;
      case "pesquisar": $nome = $_POST['nome'];
                        
                        
                      ?>
                            <script language = "Javascript">
                            window.location="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/usuarioPesquisado.php?nome=<?php echo $nome?>";
                            </script><?php
            
                    break;
      
    }
?>
