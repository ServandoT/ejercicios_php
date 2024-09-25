<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php
        $listaCompleta = $_GET['listaCompra'];
        $compraArray = explode(":", $listaCompleta,100);
        echo "<h1>Lista de la compra</h1>";
        echo "<p>";
        foreach($compraArray as $producto) {
            echo $producto . "<br>";
        }
        echo "</p>";
    ?>
</body>
</html>