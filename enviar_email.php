<?php
    //adicionando as classes do PHPMailer ao namespace global
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //adicionando arquivo autoload, responsável por localizar e carregar as classes utilizadas no código.
    require 'vendor/autoload.php';

    //dados enviados
    $nome = $_POST['nome'];
    $sbnome = $_POST['sobrenome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $msg = $_POST['mensagem'];

    //config servidor(gmail)
    $mail = new PHPMailer(true); //instaciando phpmailer
    $mail -> isSMTP(); //informando o protocolo
    $mail -> Host = 'smtp.gmail.com'; //servidor de e-mails do google (estudo)
    $mail -> SMTPAuth = true; //habilita autenticação SMTP
    $mail -> SMTPSecure = 'tls'; //criptografia usada (gmail)
    $mail -> Username = '@gmail.com'; //user ativo pra envio do email
    $mail -> Password = '';
    $mail -> Port = 587; //autenticação SSL

    //destinatário e remetente
    $mail -> setFrom($email); //email do remetente ??
    $mail -> addReplyTo($email); //resposta
    $mail -> addAddress(''); //destinatário

    //mensagem(html)
    $mail -> isHTML(true);
    $mail -> Subject = $assunto;
    $mail -> Body = "<h1>$nome $sbnome</h1> <br> <strong>$email<strong> <br> $msg";
    //$mail -> AltBody = 'conteudo alternativo caso o client não suporte html'
    
    //enviando
    if(!$mail->send()){
        echo 'Erro: ' . $mail->ErrorInfo;
        header('Location: ./index.php?msg=falha');
    } else {
        header('Location: ./index.php?msg=enviada');
    }
?>