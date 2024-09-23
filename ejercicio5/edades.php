<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
        $resultado;
        $edad = $_GET["edad"];

        if ($edad < 12) {
            $resultado = "Infante";
        } elseif ($edad >= 12 || $edad <= 17) {
            $resultado = "Adolescente";
        } elseif ($edad >= 18 || $edad <= 60) {
            $resultado = "Adulto";
        } else {
            $resultado = "Anciano";
        }

        echo "<p>$resultado</p>"
    ?>
</body>
</html>