<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación</title>
</head>

<body style='font-family: Arial, sans-serif; color: #333; line-height: 1.6; padding: 20px; margin: 0;'>
    <pre style='text-align: left;'>
        @if ($tipo === 'emisor')
            Estimado usuario,

            Le informamos que ha enviado un monto de fichas de <strong style='color: #336EFF;'>{{ $monto }}</strong>
            al usuario <strong style='color: #336EFF;'>{{ $login_rec }}</strong>.

        @elseif($tipo === 'receptor')
            Estimado usuario,

            Le informamos que ha recibido un monto de fichas de <strong style='color: #336EFF;'>{{ $monto }}</strong>
            por parte del usuario <strong style='color: #336EFF;'>{{ $login_emi }}</strong>.

        @endif

        Si considera que ha habido un error o necesita asistencia, no dude en contactarnos a través de la línea 
        <strong style='color: #336EFF;'>+1 (929) 867-3569</strong> o enviándonos un correo a 
        <strong style='color: #336EFF;'>administracion@surebets24siete.com</strong>.

        <strong style='color: #336EFF;'><center>---- AVISO DE CONFIDENCIALIDAD: ----</center></strong>
        La información contenida en este correo y sus anexos es confidencial y solo puede ser utilizada por la persona 
        o empresa a la cual está dirigida. Si no eres el receptor autorizado, cualquier retención, difusión, distribución 
        o copia de este correo está prohibida y sancionada por la ley. Si por error recibes este correo, por favor 
        reenvíalo al remitente de Corredor Empresarial S.A. y/o bórralo inmediatamente. Esta información es propiedad 
        de Corredor Empresarial S.A. Toda distribución o copia de este documento sin la autorización expresa de Corredor 
        Empresarial S.A. está prohibida y sancionada por la ley.

        Cordialmente,

        Equipo de Inversiones <strong style='color: #336EFF;'>Surebets 24/7</strong>
    </pre>
</body>

</html>
