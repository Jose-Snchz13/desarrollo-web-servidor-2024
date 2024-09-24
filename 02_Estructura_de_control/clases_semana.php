<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases de la semana</title>
</head>
<body>
    <?php
        $dia = date("l");
        echo "<h1>Hoy es $dia</h1>";
        switch ($dia) {            
            case 'Tuesday':
            case 'Wednesday':
            case 'Friday':
                echo "Hoy hay web servidor";                         
                break;
            default:
                echo "Hoy no hay web servidor";  
                break;
        }
    ?>
</body>
</html>