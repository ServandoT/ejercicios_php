<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];

    echo "<p>Hola $nombre $apellido </p>";
    ?>
</body>

</html>