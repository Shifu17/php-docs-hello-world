
<?php
// Configuración de la zona horaria
date_default_timezone_set("America/New_York");

// Obtener la fecha actual
$fecha_actual = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP Sencilla</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a mi página PHP</h1>
    <p>La fecha y hora actual es: <strong><?php echo $fecha_actual; ?></strong></p>
</body>
</html>
