<?php

/*
  File name: mail.php
  File description: model of email
  Authors: Caique Pereira, Jessica Suzuki, João Gabriel, Macário Soares, Victor Cunha.
 */

include 'Usuario.php';

$receiver = Usuario::getEmail();
$message = '<html>
				<body>
					<table background = "http://i.imgur.com/GX69Php.jpg" height = "800" width=" 650" padding-top = "300" padding-right= "100" padding-bottom ="300" padding-left= "100">
							
						<tr>
							<td valign="top">
								<br><br><br><br><br><br><br><br><br><br><br><br>
								<br><font color = "#FFFFFF" size = "6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome do Livro: </br></font>
								<br><font color = "#FFFFFF" size = "6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome do Comprador: </br></font>
								<br><font color = "#FFFFFF" size = "6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: </br></font>                          
							</td>
						</tr>
					</table>		
				</body>

				</html>';


$subject = 'Existe uma pessoa interessada no seu Livro - Sebo Eletronico';
// Subject
$addresseeAuxiliar = $receiver;
// Receiver
$body = $message;
// Body of the text message.

if (mail($addresseeAuxiliar, $subject, $body, "Content-Type: text/html"))
    echo 'e-mail enviado com sucesso!';
else
    echo 'e-mail nao enviado!';
?>