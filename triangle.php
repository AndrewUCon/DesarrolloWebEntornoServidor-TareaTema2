<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Triangulo</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <a href="index.php">Index</a>
    <?php 
    require_once 'Clases/TriangleGenerator.php';

    $triangulo = new TriangleGenerator()->generateTriangle(6);

    echo $triangulo;
    ?>
    
</body>
</html>