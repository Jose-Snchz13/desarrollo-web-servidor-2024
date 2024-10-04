<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>
</head>
<body>
    <?php
    $videojuegos=[
        ["EA FC 25","Deportes",70],
        ["Dark Souls III","GOTY",30],
        ["League of leguends","Juego rarete",0]
    ];

    foreach ($videojuegos as $videojuego ) {
        list($titulo,$categoria,$precio) = $videojuego;
    }
    $nuevo_juego = ["Throne and Liberty", "MMO", 0];
            array_push($videojuegos,$nuevo_juego);
            //$_titulo = array_column($videojuegos, 0);
            //array_multisort($_titulo, SORT_ASC, $videojuegos);
            //EJ rapido 1
            //$_precio = array_column($videojuegos, 2);
            //array_multisort($_precio, SORT_ASC, $videojuegos);
            //EJ rapido 2
            $_categoria = array_column($videojuegos, 1);
            array_multisort($_categoria, SORT_DESC, $videojuegos);
    ?>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Categoria</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php          
                foreach ($videojuegos as $juego) {
                    list($titulo,$categoria,$precio) = $juego;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$categoria</td>";
                    echo "<td>$precio</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>