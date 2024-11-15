<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surebets 24/7</title>
</head>

<body>
    <pre style='text-align:left'>
        @if ($estado == 'REALIZADO')
Te informamos 

Que Surebets 24/7 ha realizado con éxito un adelanto por el valor de {{ $val_ade }} USD,
el adelanto ha sido registrado y procesado con transparencia.
@elseif($estado == 'ANULADO')
Lamentablemente,
            
El adelanto solicitado ha sido anulado.
No se realizará el adelanto por el valor de {{ $val_ade }} USD.
@endif
<br>
Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos a través de la línea 
<strong style='color:#336EFF;'>+1 (929)867-3569</strong> o enviándonos un correo a 
<strong style='color:#336EFF;'>administracion@surebets24siete.com</strong>.

<strong style='color:#336EFF;'><center>---- AVISO DE CONFIDENCIALIDAD: ----</center></strong><br>La información contenida en este correo y sus anexos es confidencial y solo puede ser utilizada por la persona o empresa a la cual está dirigida. Si no eres el receptor autorizado, cualquier retención, difusión, distribución o copia de este correo está prohibida y sancionada por la ley. Si por error recibes este correo, por favor reenvíalo al remitente de Corredor Empresarial S.A. y/o bórralo inmediatamente. Esta información es propiedad de Corredor Empresarial S.A. Toda distribución o copia de este documento sin la autorización expresa de Corredor Empresarial S.A. está prohibida y sancionada por la ley.<br><br>Cordialmente<br><br>Equipo de Inversiones <strong style='color:#336EFF;'>Surebets 24/7</strong>.
    </pre>
</body>

</html>
