<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    $suma = 0;
    for ($i=0; $i <= 20; $i++) { 
        if($i % 2 == 0) $suma  += $i;
    }
    echo "<p>".$suma."</p>";
    ?>
    <h1>Ejercicio2</h1>
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
        $mes = date("m");
        $siwi2 = null;
        
        switch ($mes) {    
            case '01':
                $siwi2 = 'Enero';
                break;
            case '02':
                $siwi2 = 'Febrero';
                break;
            case '03':
                $siwi2 = 'Marzo';
                break;
            case '04':  
                $siwi2 = 'Abril';
                break;
            case '05':
                $siwi2 = 'Mayo';
                break;
            case '06':
                $siwi2 = 'Junio';
                break;
            case '07':
                $siwi2 = 'Julio';
                break;
            case '08':
                $siwi2 = 'Agosto';
                break;
            case '09':
                $siwi2 = 'Septiembre';
                break;
            case '10':
                $siwi2 = 'Octubre';
                break;
            case '11':
                $siwi2 = 'Noviembre';
                break;
            default:
                $siwi2 = 'Diciembre';
                break;
        }
        $ndia = date("j");
        $ano =date("Y");
        echo $siwi." ".$ndia." de ".$siwi2." de ".$ano;
    ?>
</body>
</html>