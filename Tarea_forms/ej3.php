<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
    <?php
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>
</head>
<body>
<!--Realiza un formulario que reciba dos números y devuelva todos 
los números primos dentro de ese rango (incluidos los extremos).-->
<form action="" method="post">
        <input type="text" name="n1">
        <input type="text" name="n2">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /**
             * Elservidor ejecutaráeste bloque de codigo cuando reciba 
             * una petición a trravés del metodo POST.
             */            
            $n1 = (int)$_POST["n1"];
            $n2 = (int)$_POST["n2"];
            
            $res = "";
            $cont = 0;            

            for($i = $n1; $i <= $n2; $i++){
                for($j = 1; $j <= $n2; $j++){
                        if($i % $j == 0) {
                            $cont++;
                        }    
                }
                if($cont == 2) $res = $res.$i . " ";
                $cont = 0;
            }
            echo $res;

        }
    ?>
</body>
</html>