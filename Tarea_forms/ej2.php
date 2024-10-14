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
<!--Realiza un formulario que reciba 3 números: a, b y c. Se mostrarán en una lista los múltiplos de c que se encuentren entre a y b.

Por ejemplo, si a = 3, b = 10, c = 2

Los múltiplos de 2 entre 3 y 10 son: 4, 6, 8 y 10-->
<form action="" method="post">
        <input type="text" name="n1">
        <input type="text" name="n2">
        <input type="text" name="n3">
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
            $n3 = (int)$_POST["n3"];
            echo "<ul>";
            for ($i=$n1; $i <= $n2 ; $i++) { 
                if($i % $n3==0) echo "<li>".$i."</li>";
            }
                echo "</ul>";
        }
    ?>
</body>
</html>