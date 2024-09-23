<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
        $mayor = max($_GET["num1"], $_GET["num2"], $_GET["num3"]);
        echo "<p>El número mayor es: $mayor</p>";
    ?>
</body>
</html>