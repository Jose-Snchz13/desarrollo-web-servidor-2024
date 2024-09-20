<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    $numero = "a";

    if($numero > 0) echo "<p>El numero $numero es positivo</p>";
    if($numero < 0):
        echo "<p>El número $numero es negativo</p>";
    endif;
    if($numero > 0) {
        echo "El numero $numero es positivo";
    }else {
        echo "<p>El número $numero es negativo</p>";
    }
    ?>
</body>
</html>