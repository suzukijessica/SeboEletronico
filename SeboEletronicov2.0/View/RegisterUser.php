<?php

/*
  File name: RegisterUser.php
  File description: data view to registering the user
 */

session_start();
$idUser = $_SESSION['id_usuario'];

?>
<!DOCTYPE HTML>
<html>
    <head>	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://localhost/SEBOtecprog/SeboEletronicov2.0/View/css/UsuarioStyle.css" type="text/css" media="all">
        <link rel="stylesheet" href="http://localhost/SEBOtecprog/SeboEletronicov2.0/View/css/main.css" type="text/css" media="all">
        <link rel="shortcut icon" href="http://localhost/SEBOtecprog/SeboEletronicov2.0/View/img/android.ico">
        <script src="http://localhost/SEBOtecprog/SeboEletronicov2.0/Utilities/Redirect.js"></script> 
        <title>Sebo Eletrônico</title>

    </head>
    <body>
        <div id="header">
            <div id="logo"><img src="http://localhost/SEBOtecprog/SeboEletronicov2.0/View/img/sebo_header.png" class="imgHeader"/></div>
        </div>

        <div id="mainmenu">

            <button class="button" onclick="home();">Home</button>
            <button class="button" onclick="login();">Login</button>

        </div>

        <br/>
        <br/>
        <br/>

        <form  name="Insere Dados" action="http://localhost/SEBOtecprog/SeboEletronicov2.0/Utilities/ReceiveForm.php" method="post" class="formu">

            <table class='insr'>

                <tr>
                    <th class='titlein' > <h5>Cadastro de Usuário</h5></th>
                </tr>

                <tr> 
                    <td>
                        <h2> Nome: <input type="text" name="nome"/></h2> 
                    </td>
                </tr>

                <tr>
                    <td > 
                        <h4> E-mail: <input type="text" name="email"/></h4>
                    </td>
                </tr>

                <tr> 
                    <td>
                        <h6> Telefone: <input type="text" name="telephone"/></h6> 
                    </td>
                </tr>

                <tr>              
                    <td>
                        <h4> Senha: <input type="password" name="senha[]"/></h4> <p>
                    </td>    
                </tr>

                <tr>              
                    <td>
                        <h3> Confirmar Senha: <input type="password" name="senha[]"/></h3> <p>
                    </td>    
                </tr>

                <th>
                    <input type="hidden" name="tipo" value="cadastrar"/>
                    <input type="submit" name='Enviar' value="ENVIAR" title='Enviar dados' />
                    <input type="reset" name='Limpar' value="LIMPAR DADOS" title='Limpar dados' /> 
                </th>

            </table>    

        </form>


    </body>


</html>