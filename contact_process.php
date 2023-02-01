<?php

    if(isset($_POST['email'])){

    $name = addcslashes($_post['name']);
    $email = addcslashes($_post['email']);
    $assunto = addcslashes($_post['subject']);
    $mensagem = addcslashes($_post['message']);

    $to = "gildemardiniz@gmail.com"
    $subject = .$assunto;
    $body = "Nome: ".$nome. "\r\n".
    					"Email: ".$email. "\r\n".
    					"Mensagem: ".$mensagem;
    $header = "From: contato@eletricaecftv.com"."\r\n".
    			"Reply-To:".$email."\r\n".
    			"X=Mailer:PHP/".phpversion();
    if (mail($to,$subject,$body,$header)){
    	echo("Email enviado com sucesso!");
		header("location: contato.html?alert=1");
    }else{
    	echo("Falha no envio do email!")
		header("location: contato.html?alert=2");";"
    }
	}

?>