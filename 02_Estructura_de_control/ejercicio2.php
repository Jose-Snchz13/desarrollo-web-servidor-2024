<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $datos = [
            "DWS" => "Alejandra",
            "DWC" => "Jaime",
            "DI" => "José",
            "Despl" => "Alejandro",
            "Empresa" => "Gloria",
            "Ingles" => "Virginia",
       ]; 
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /*Profesores inversa*/
            ksort($datos);
            foreach ($datos as $asig => $profe) {
                echo "<tr> 
                <td>".$asig."</td>
                <td>".$profe."</td>
                </tr>";
            }
            ?>
        </tbody>
        <?php
        $notas = [
            "Guillermo" => 10,
            "Daiana" => 5,
            "Angel" => 2,
            "Ayoub" => 0,
            "Mateo" => 3,
            "Joaquín" => 10,
        ]; 
        ?>
        <table border="1">
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                  
            foreach ($notas as $key => $item) {
                $aprueba = "Suspenso"; 
                echo "<tr> 
                    <td>".$key."</td>
                    <td>".$item."</td>";
                if($item >= 5){                    
                    $aprueba = "Aprobado";                 
                }
                echo "<td>".$aprueba."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    
    ?>
</body>
</html>