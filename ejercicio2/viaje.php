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
        $distancia = $_GET["distancia"];
        $velocidad = $_GET["velocidad"];
        
        // Con intval cogmos la parte entera, las horas
        $horas = intval($distancia / $velocidad);
        $minutos = intval((($distancia/$velocidad) - $horas) * 60);

        echo "<p>Vas a tardar $horas horas y $minutos minutos</p>"
    ?>
</body>
</html>