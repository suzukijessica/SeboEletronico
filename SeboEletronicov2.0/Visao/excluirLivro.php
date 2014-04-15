<?php
/*
 File name: excluirLivro.php
 File description: data view to delete the book.
*/

session_start();
$idUser = $_SESSION['id_usuario'];
?>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/css/UsuarioStyle.css" type="text/css" media="all">
        <link rel="stylesheet" href="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/css/main.css" type="text/css" media="all">
        <link rel="shortcut icon" href="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/img/android.ico">
        <script src="http://localhost/SEBOtecprog/SeboEletronicov2.0/Utilidades/Redireciona.js"></script> 
    <title>Sebo Eletrônico</title>
    
</head>
<body>
    <div id="header">
		<div id="logo"><img src="http://localhost/SEBOtecprog/SeboEletronicov2.0/Visao/img/sebo_header.png" class="imgHeader"/></div>
    </div>
       <button class="button" onclick="home()">Home</button>
       <button class="button" onclick="user();">Usuário</button>       
       <button class="button" onclick="livro();">Livro</button>
       <button class="button" onclick="sair();">Sair</button>
       
   </div>
    
    <div id="mainmenu">
       
       <button class="button" onclick="meusLivros();">Meus Livros</button>
       <button class="button" onclick="livrosDisponiveis();">Livros Disponiveis</button>
       <button class="button" onclick="cadastraLivro();">Cadastrar</button>
       <!--<button class="button" onclick="deletaLivro();">Deletar</button>-->
       <button class="button" onclick="pesquisaLivro();">Pesquisar</button>
   </div>
    
    <br/>
    <br/>
    <br/>
    
    <form  name="Insere Dados" action="http://localhost/SEBOtecprog/SeboEletronicov2.0/Utilidades/RecebeFormLivro.php" method="post" class="Formulario">
        
                <table class='insr'>

                <tr>
                    <th class='titlein' > <h5>Deletar Livro</h5></th>
                </tr>
        
                <tr>
                    <td > 
                        <h4> Título: <input type="text" name="titulo"/></h4>
                    </td>
                </tr>
                
                <th>
                    <input type="hidden" name="tipo" value="excluiLivro"/>
                    <input type="submit" name='Enviar' value="ENVIAR" title='Enviar dados' />
                    <input type="reset" name='Limpar' value="LIMPAR DADOS" title='Limpar dados' /> 
                </th>

                </table>    
        
    </form>
    
    
</body>


</html>

