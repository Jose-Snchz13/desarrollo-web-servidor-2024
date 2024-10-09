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
    <!--
        CREA UN FORMULARIO QUE RECIBA DOS VALORES: EL NOMBRE Y LA EDAD DE UNA PERSONA

        SI LA PERSONA TIENE:
        >18 SE MOSTRARA "X ES MENOR DE EDAD" 
        >=18 && < 65 ES UN ADULTO
    -->
    <form action="" method="post">
        <input type="text" name="nombre">
        <input type="text" name="edad">
        <button type="submit">Enviar</button>            
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /**
         * Elservidor ejecutaráeste bloque de codigo cuando reciba 
         * una petición a trravés del metodo POST.
         */
        $nombre = $_POST["nombre"];
        $edad = (int)$_POST["edad"];
        $res = match (true) {
            $edad < 18 => "$nombre es Menor de edad",
            $edad >=18 && $edad < 65 => "$nombre todavia no esta jubilado",
            $edad >= 65 => "$nombre esta jubilado"
        };
        echo "<h1>$res</h1>";
    }
    ?>
</body>
</html>