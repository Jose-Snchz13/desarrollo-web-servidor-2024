<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases de la semana</title>
</head>
<body>
    
    <?php
    /*
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
        }*/
    ?> 
    <?php
        $dia = date("l");
        $siwi = null;
        
        switch ($dia) {    
            case 'Sunday':
                $siwi = 'Domingo';
                break;
            case 'Monday':
                $siwi = 'Lunes';
                break;
            case 'Thursday':
                $siwi = 'Jueves';
                break;
            case 'Saturday':  
                $siwi = 'Sabado';
                break;
            case 'Tuesday':
                $siwi = 'Martes';
                break;
            case 'Wednesday':
                $siwi = 'Miercoles';
                break;
            default:
                $siwi = 'Viernes';
                break;
        }
        echo "<h1>Hoy es $siwi</h1>";
        switch ($siwi) {            
            case 'Martes':
            case 'Miercoles':
            case 'Viernes':
                echo "<p>Hoy hay web servidor<p>";                         
                break;
            default:
                echo "Hoy no hay web servidor";  
                break;
        }
        $resultado = match($siwi){
            "Martes", 
            "Miercoles",
            "Viernes" => "<p>Hoy hay web servidor<p>",
            default => "<p>Hoy no hay web servidor</p>"            
        };
        echo $resultado;
    ?>
</body>
</html>