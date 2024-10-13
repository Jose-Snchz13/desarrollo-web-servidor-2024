/**
 EJERCICIO 1: Realiza un formulario que reciba 3 números y devuelva el mayor de ellos. */
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
            if(n1>n2 && n1>n3) echo "El primer numero introducido es el mayor";
            else if(n1<n2 && n2>n3) echo "El segundo numero introducido es el mayor";
            else echo "El tercer numero introducido es el mayor";
        }
    ?>
</body>
</html> 