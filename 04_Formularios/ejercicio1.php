<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <?php
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>
</head>
<body>
    <?php
    /**
     * SINGLE PAGE FORM -> TODA LA INFORMACIÓN SE PROCESA EN LA MISMA PÁGINA
     * 
     * MULTI PAGE FORM -> REENVÍAN A OTRA PÁGINA
     */
    ?>
    <form action="" method="post">
        <input type="text" name="mensaje">
        <input type="text" name="numero">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /**
             * Elservidor ejecutaráeste bloque de codigo cuando reciba 
             * una petición a trravés del metodo POST.
             */
            $mensaje = $_POST["mensaje"];
            $numero = (int)$_POST["numero"];
            while ($numero > 0) {
                echo "<h1>$mensaje</h1>";  
                $numero--;
            }
            

            /**
             * Modificar el formulario anterior para que se oueda introducir también
             * un numero
             * 
             * El mensaje se mostrará tantas veces como indique el número.
             */
        }
    ?>
</body>
</html>