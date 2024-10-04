<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>
</head>
<body>
    <?php
    $autobuses = [
        ["Málaga", "Ronda", 90, 10],
        ["Churriana", "Málaga", 20, 3],
        ["Málaga", "Granada", 120, 15],
        ["Torremolinos", "Málaga", 30, 3.5]
    ];
    array_push($autobuses, ["Setenil", "Málaga", 100, 12]);
    array_push($autobuses, ["Setenil", "Ronda", 30, 4]);
    array_push($autobuses, ["Málaga", "Sevilla", 200, 20]);
    array_push($autobuses, ["Málaga", "Antequera", 50, 8]);
    /*
    $_origen = array_column($autobuses, 0);
    $_destino = array_column($autobuses, 1);
    
    array_multisort($_origen, SORT_ASC,$_destino ,$autobuses);
    */
    $_dura = array_column($autobuses, 2);
    $_precio = array_column($autobuses, 3);
    array_multisort($_dura, SORT_ASC,$_precio ,$autobuses);    
    for ($i=0; $i < count($autobuses); $i++) { 
        if($autobuses[$i][2] <= 30){
            $autobuses[$i][4] = "Corta distancia";
        }elseif ($autobuses[$i][2] <= 120) {
            $autobuses[$i][4] = "Media distancia";
        }else{
            $autobuses[$i][4] = "Larga distancia";
        }
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Salida</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
                <th>Distancia</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($autobuses as $bus) {
                    list($salida,$destino,$duracion,$precio,$distancia) = $bus;
                    echo "<tr>";
                    echo "<td>$salida </td>";
                    echo "<td>$destino </td>";
                    echo "<td>$duracion </td>";
                    echo "<td>$precio </td>";
                    echo "<td>$distancia </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>