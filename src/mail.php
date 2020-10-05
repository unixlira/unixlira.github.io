<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendLira($nome,$email,$assunto,$mensagem)
{
    $visitantes = fopen('src/visitantes.txt', "a+");
        while(!feof($visitantes)){
            $linha = fgets($visitantes, 1024);
            echo $linha.'<br />';
        }
    fclose($visitantes);

    $mail = new PHPMailer(true);
    try {                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com.br';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'lira@digplay.tech';                     // SMTP username
        $mail->Password   = '#Fibra13';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('lira@digplay.tech', utf8_decode('Contato do site José Lira'));
        $mail->addAddress('lira@digplay.tech');
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = utf8_decode($assunto);
        $mail->Body    = "<strong>Mensagem enviada de:</strong> ".utf8_decode($nome)."<br>".
                         "<strong>Email:</strong> " .$email."<br>".
                         "<strong>Assunto:</strong> ".utf8_decode($assunto)."<br>".
                         "<strong>Mensagem:</strong><br> " . utf8_decode($mensagem).
                         "<br><br><br><strong>Total de Visitas: </strong> " . $linha ;

        $mail->send();

        return true;
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}

function sendMail($nome, $email)
{
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com.br';
        $mail->SMTPAuth   = true;                         
        $mail->Username   = 'lira@digplay.tech';
        $mail->Password   = '#Fibra13';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
    

        $mail->setFrom('lira@digplay.tech', utf8_decode('Contato do site Portifólio Lira'));
        $mail->addAddress($email, $nome); 
        $mail->isHTML(true);
        $mail->Subject =  utf8_decode('Olá, aqui o José Lira!');
        $mail->Body    =  "<!DOCTYPE html>
        <html lang='pt-BR'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        </head>
        <body>
            <div>
                <p>Fala $nome tudo bem.<br>Eu recebi sua mensagem e irei responder o mais breve possível ok, muito obrigado!</p>
            </div>
            <br>
            <br>
            <p>Atenciosamente,</p>
            <table cellspacing='0' cellpadding='0' border='0'> 
                <tr>
                        <td valign='top' width='100' style='padding:0 8px 0 0;vertical-align: top;'> 
                            <a>
                            <img alt='José Lira' width='100' style='width:100px;moz-border-radius:10%;khtml-border-radius:10%;o-border-radius:10%;webkit-border-radius:10%;ms-border-radius:10%;border-radius:10%;' src='http://lira.digplay.tech/images/assMail.png' />
                        </a> 
                    </td>  
                    <td style='font-size:1em;padding:0 15px 0 8px;vertical-align: top;' valign='top'> 
                        <table cellspacing='0' cellpadding='0' border='0' style='line-height: 1.4;font-family:Verdana, Geneva, sans-serif;font-size:90%;color: #000001;'> 
                            <tr> 
                                <td> 
                                    <div style='font: 1.2em Verdana, Geneva, sans-serif;color:#000001;'>José Lira</div> 
                                </td> 
                            </tr> 
                            <tr> 
                                <td style='padding: 4px 0;'> 
                                    <div style='color:#000001;font-family:Verdana, Geneva, sans-serif;'> Desenvolvedor  |  Dig Play   |  Tech </div> 
                                </td> 
                            </tr>  
                            <tr> 
                                <td> 
                                    <span style='font-family:Verdana, Geneva, sans-serif;color:#91AE6D;'>telefone:&nbsp;</span> 
                                    <span><a style='font-family:Verdana, Geneva, sans-serif;color:#000001;text-decoration:none;' href='tel:(11)2605-1411'>(11)2605-1411</a>
                                    </span> 
                                </td> 
                            </tr>   
                            <tr> 
                                <td> 
                                    <span style='font-family:Verdana, Geneva, sans-serif;color:#91AE6D;'>celular:&nbsp;</span> 
                                    <span><a style='font-family:Verdana, Geneva, sans-serif;color:#000001;text-decoration:none;' href='tel:(11)99025-3050'>(11)99025-3050</a></span> 
                                </td> 
                            </tr>   
                            <tr> 
                                <td> 
                                    <span style='font-family:Verdana, Geneva, sans-serif;color:#91AE6D;'>site:&nbsp;</span> 
                                    <span style='font-family:Verdana, Geneva, sans-serif;text-decoration:none;'><a href='http://lira.digplay.tech/' style='color:#000001;text-decoration:none;' target='_blank'>http://lira.digplay.tech</a></span> 
                                </td> 
                            </tr>   
                            <tr> 
                                <td> 
                                    <span style='font-family:Verdana, Geneva, sans-serif;color:#91AE6D;'>email:&nbsp;</span> 
                                    <span><a href='mailto:lira@digplay.tech' target='_blank' style='font-family:Verdana, Geneva, sans-serif;color: #000001;text-decoration:none;'>lira@digplay.tech</a></span> 
                                </td> 
                            </tr>     
                        </table> 
                    </td>  
                    <td style='border-left:3px solid;vertical-align:middle;padding:0 0 3px 6px;font-family: Arial;border-color:#91AE6D;' valign='middle'> 
                        <table cellspacing='0' cellpadding='0' border='0' style='line-height: 1;'> 
                            <tr>
                                <td style='padding: 4px 0 0 0;'>
                                    <a target='_blank' class='social_link' href='https://www.linkedin.com/in/jos%C3%A9-lira/'>
                                        <img alt='Create by UnixLira' style='width:22px;' width='22' src='http://lira.digplay.tech/images/iconLinkedin.png'></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 4px 0 0 0;'>
                                        <a target='_blank' class='social_link' href='https://github.com/unixlira'>
                                            <img alt='Create by UnixLira' style='width:22px;' width='22' src='http://lira.digplay.tech/images/iconGitHub.png'></a>
                                        </td>
                                    </tr> 
                                </table> 
                            </td>  
                        </tr> 
                    </table> 
                </td> 
            </tr>
            </table>
        </body>
        </html>";

        $mail->send();

        return true;
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}