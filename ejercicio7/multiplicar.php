<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
        $tabla = "";
        $numero = $_GET["numero"];
        $tabla .= "<h1>Tabla del $numero</h1>";
        for ($i = 1; $i <= 10; $i++) {
            $tabla .= $numero . " x " . $i . " = ";
            $tabla .= ($i * $numero) . "<br>";
        }

        echo "<p>$tabla</p>";
    ?>
</body>
</html>