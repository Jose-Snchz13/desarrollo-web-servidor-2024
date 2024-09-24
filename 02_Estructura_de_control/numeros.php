<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <?php
    //$numero = "a";

    //if($numero > 0) echo "<p>El numero $numero es positivo</p>";
    //if($numero < 0):
    //    echo "<p>El número $numero es negativo</p>";
    //endif;
    //if($numero > 0) {
    //    echo "El numero $numero es positivo";
    //}else {
    //    echo "<p>El número $numero es negativo</p>";
    //}
    $numero1 = 3;

    //if($numero >=-10 &&$numero<0):
      //  echo "El numero $numero esta en el rango [-10,0]";
    //elseif($numero >= 0 and $numero <= 10):
      //  echo "El numero $numero esta en el rango [0,10]";
    //elseif($numero >= 10 and $numero <= 20):
      //  echo "El numero $numero esta en el rango [10,20]";
    //else:
      //  echo "El número no esta en ningun rango";
    //endif;

    $numero2 = 4;

    if($numero1 > $numero2):
        echo "$numero1 es mayor que $numero2";
    elseif ($numero2 > $numero1):
        echo "$numero2 es mayor que $numero1";
    else:
        echo "$numero1 y $numero2 son iguales";
    endif;
    echo "<br>";
    if($numero1==$numero2) echo "$numero1 y $numero2 son iguales";
    else {
        if($numero1 > $numero2):
            echo "$numero1 es mayor que $numero2";
        elseif ($numero2 > $numero1):
            echo "$numero2 es mayor que $numero1";
        endif;
    }
    ?>
</body>
</html>