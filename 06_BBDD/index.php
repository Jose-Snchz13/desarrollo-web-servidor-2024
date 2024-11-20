<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors" , 1);
        require('conexion.php');
    ?>
</head>
<body>
    
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Estudio</th>
                    <th>Año</th>
                    <th>Numero de temporadas</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM animes";
                $resultado = $_conexion -> query($sql);

                while ($entrada = $resultado -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<td></td>";
                    echo "</tr>";
                };
            ?>
            </tbody>
        </table>
        
    </div>

</body>
</html>