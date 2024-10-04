<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frutas = [
        "Manzana",
        "Naranja",
        "Cereza",
    ];
    $frutas2 = [
        0 =>"Manzana",
        1 =>"Naranja",
        2 =>"Cereza",
    ];
    $frutas3 = [
        "Manzana",
        "Naranja",
        "Cereza",
    ];
        echo "<ol>";
        for ($i=0; $i < count($frutas); $i++) { 
            echo "<li>" , $frutas[$i] , "</li>";
        }
        echo "</ol>";
        echo "<ol>";
        
        foreach ($frutas as $clave => $item) {
            echo "<li>" , $clave , $item , "</li>"; 
        }
        echo "</ol>";

        echo "A partir de aqui van a pasar cosas raras";
        array_push($frutas,"Huevos de Adri");
        $frutas["Siwi"] = "Gonaldo";
        
        echo "<ol>";
        foreach ($frutas as $clave => $item) {
            echo "<li>" , $clave ," ", $item , "</li>"; 
        }
        echo "</ol>";
    ?>
    <table border="1px">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Frutica</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($frutas as $clave => $item) {
                    echo "<tr>";
                    echo "<td>".$clave."</td>";
                    echo "<td>".$item."</td>"; 
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>