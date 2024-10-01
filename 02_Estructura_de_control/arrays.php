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
        echo "<ol>";
        for ($i=0; $i < count($frutas); $i++) { 
            echo "<li>" , $frutas[$i] , "</li>";
        }
        echo "</ol>";
        echo "<ol>";
        
        foreach ($frutas as $item) {
            echo "<li>" , $item , "</li>"; 
        }
        echo "</ol>";

    ?>
</body>
</html>