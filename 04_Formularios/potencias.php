<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA DOS NUMEROS: BASE Y EXPONENTE

        SE MOSTRARÁ EL RESULTADO DE ELEVAR LA BASE AL EXPONENTE

        EJEMPLOS:

        - 2 ELEVADO A 3 = 8

    -->
        <form action="" method="post">
            <input type="text" name="base">
            <input type="text" name="exponente">
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /**
             * Elservidor ejecutaráeste bloque de codigo cuando reciba 
             * una petición a trravés del metodo POST.
             */
            $base = $_POST["base"];
            $multi = 1;
            $exponente = (int)$_POST["exponente"];
            while($exponente>0){
                $multi *= $base;
                $exponente--;
            }
            echo "<h1>".$multi."</h1>";
        }
        ?>
</body>
</html>