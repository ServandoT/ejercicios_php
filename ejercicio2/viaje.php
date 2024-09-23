<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
        $distancia = $GET["distancia"];
        $velocidad = $GET["velocidad"];
        // TODO: Calcular horas y minutos, no solo dejar 1,4 horas
        $tiempo = $distancia / $velocidad;
        echo "<p>Vas a tardar $tiempo horas</p>"
    ?>
</body>
</html>