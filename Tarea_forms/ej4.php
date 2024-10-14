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
        <select name="tipo1">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>
            <select name="tipo2">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /**
             * Elservidor ejecutaráeste bloque de codigo cuando reciba 
             * una petición a trravés del metodo POST.
             */            
            $n1 = (int)$_POST["n1"];
            $selector1 = $_POST["tipo1"];
            $selector2 = $_POST["tipo2"];
            $sum = $selector1.$selector2;
            
            $res = match (true) {
                $sum == "celsiusfahrenheit" => $n1 * 9/5 + 32,
                $sum == "celsiuskelvin" => $n1 + 273.15,
                $sum == "fahrenheitkelvin" => ($n1-32) * 9/5,
                $sum == "fahrenheitcelsius" => ($n1-32) * 9/5 +273.15,
                $sum == "kelvincelsius" => $n1 - 273.15,
                $sum == "kelvinfahrenheit" => ($n1- 273.15) * 9/5 + 32,
                default => $n1,
            };
            echo $res;
        }
    ?>
</body>
</html>