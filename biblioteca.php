<?php

$libros = [
    "libro1" => [
    "titulo" => "PHP para Principiantes",
    "autor"=> "Carlos Ruiz",
    "precio"=> 19.99,
    "categoria"=> "Desarrollo Web"
    ],
    "libro2"=> [
        "titulo"=> "Javascript Avanzado",
        "autor" => "Laura García",
        "precio" => 25.99,
        "categoria" => "Desarrollo Web"
    ],
    "libro3" => [
        "titulo" => "Algoritmos en Python",
        "autor" => "Miguel Fernandez", 
        "precio" => 29.99,
        "categoria" => "Algoritmos"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <a href="index.php">Index</a>
    <h2>Información de todos los libros</h2>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
    <?php 
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>". $libro["titulo"] ."</td>";
            echo "<td>". $libro["autor"] ."</td>";
            echo "<td>". $libro["precio"] ."</td>";
            echo "<td>". $libro["categoria"] ."</td>";
            echo "</tr>";
        }
    ?>    
    </table>

    <h2>Libros de la categoría 'Desarrollo Web'</h2>
    <ol>
    <?php 
        foreach ($libros as $libro) {
            if ($libro["categoria"] == "Desarrollo Web") {
                echo "<li>". $libro["titulo"] . "</li>";
            }
        }
    ?>   
    </ol>

</body>
</html>