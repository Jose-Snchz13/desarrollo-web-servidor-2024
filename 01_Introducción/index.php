<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        define("EDAD",25);

        $var="Hola mundo que tal estais";
        echo $var;
        var_dump($var);
        $var=3;
        var_dump($var);

        echo EDAD;

        echo "
        <h2 style='color:orange'>
        La variable es $var
        </h2>";
        $frase1 = "Hola";
        $frase2 = "Mundo";
        
        echo "<p>$frase1 " . "$frase2</p>";
        
    ?>
</body>
</html>