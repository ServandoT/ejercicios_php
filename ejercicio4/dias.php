<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
        $num = intval($_GET["num"]) - 1;
        $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        echo "$dias[$num]";
    ?>
</body>
</html>