<?php
namespace Ifnc\Tads\Helper;

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Email
{



    public static function random_key($chars = 8) {
        $letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        return substr(str_shuffle($letters), 0, $chars);
    }

    public function __construct($email, $nome, $titulo, $conteudo){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = '4thiagomelo5@gmail.com';                     // SMTP username
            $mail->Password   = 'qprwoqboutvrsxzi';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';
            //Recipients
            $mail->setFrom('4thiago5@gmail.com', 'Sistema Web Escolar');
            $mail->addAddress($email, $nome);     // quem vai receber o email
            // Content     // Set phpmailer format to HTML
            $mail->Subject = $titulo;
            $mail->Body    = $conteudo;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


}


