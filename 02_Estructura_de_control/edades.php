<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $edad = rand(-10,150);
        if($edad >=0 && $edad <=4) echo "Es un bebe";
        else if($edad >=0 && $edad <=17) echo "Es un menor de edad";
        else if($edad >=0 && $edad <=65) echo "Es un Adulto";
        else if($edad >=0 && $edad <=120) echo "Es un Jubilado";
        else echo "Eres Tonto tu edad como va a ser $edad";

        $resultado = match (true){
            $edad < 0 || $edad > 120 => "Eres Tonto tu edad como va a ser $edad",
            $edad <= 4 => "Es un bebe",
            $edad <= 17 => "Es un menor de edad",
            $edad <= 65 => "Es un Adulto",
            default => "Es un jubilado",
        };
        echo "<br>", $edad;
        echo "<br>", $resultado;
    ?>
</body>
</html>