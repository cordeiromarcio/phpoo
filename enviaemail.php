<?php

require_once 'PHPMailer.php';
require_once 'classes/PHPMailerAdapter.php';

//envio de email
$mail = new PHPMailerAdapter;
//From (Remetente)
$mail->setFrom('marcio@marcio.com', 'Marcio');
//Endereços (Destinatário)
$mail->setFrom('destinatario@destinatario.com', 'Nome');
//Assunto
$mail->setSubject('Assunto');
//Corpo do email
$mail->setTextBody('Esse é um email de teste (corpo do email');
//Envio do email
$mail->send();