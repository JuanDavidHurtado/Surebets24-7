<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surebets 24/7</title>
</head>

<body>
    <pre style='text-align:left'>
        Estimado equipo de Surebets 24/7,

        El usuario {{ $data['nombre'] }} se ha puesto en contacto solicitando información.
        
        Detalles del usuario:
        - Nombre: {{ $data['nombre'] }}
        - Teléfono: {{ $data['telefono'] }}
        - Correo: {{ $data['correo'] }}

        Mensaje:
        {{ $data['mensaje'] }}
    </pre>
</body>

</html>
