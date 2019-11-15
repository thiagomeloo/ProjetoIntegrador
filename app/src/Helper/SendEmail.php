<?php


namespace Ifnc\Tads\Helper;


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

class SendEmail
{
    public function __construct($email){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'sistemawebescolar@gmail.com';          // SMTP username
            $mail->Password   = 'sistema@web';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            //Recipients
            $mail->setFrom('4thiago5@gmail.com', 'Sistema Web Escolar');
            $mail->addAddress($email->emailDestino, $email->nome);     // quem vai receber o email
            // Content     // Set phpmailer format to HTML
            $mail->Subject = $email->titulo;
            $mail->Body    = $email->conteudo;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}