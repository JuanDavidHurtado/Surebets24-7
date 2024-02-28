<?php

namespace App\Utilities;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Utilities\CorreoUtil;


class CorreoUtil
{
    public static function configurarCorreo()
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl'; // Puedes probar con 'tls' si SSL no funciona
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'administracion@surebets24siete.com';
        $mail->Password = 'Pinky2023@';

        // Establecer el remitente, destinatario, asunto y cuerpo del correo
       
        $mail->setFrom('administracion@surebets24siete.com', 'Surebets');


        return $mail;
    }

    public static function enviarCorreo($destinatario, $asunto, $cuerpo)
    {
        try {
            $mail = self::configurarCorreo();

            $mail->addAddress($destinatario, 'Destinatario');
            $mail->Subject = iconv('UTF-8', 'ISO-8859-1', $asunto);

            $mail->isHTML(true);
            $mail->Body = $cuerpo;

            $mail->send();
            return true;
        } catch (Exception $e) {
            // Manejar errores aquí si es necesario
            return false;
        }
    }
}
