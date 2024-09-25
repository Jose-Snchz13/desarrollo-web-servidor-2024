<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas.me</title>
</head>
<body>
    <h3>Lista 1</h3>
    <?php
        $i = 1;
        echo "<ul>";
        while($i <10) {
            echo "<li>$i</li>";
            $i++;
        }
        echo "</ul>";
    ?>

    <h3>Lista 2 (Multiplos de 3)</h3>
    <?php
    $i = 1;
    echo "<ul>";
        while($i <= 30) :
            if($i % 3 == 0) echo "<li>$i</li>";
            $i++; 
        endwhile;
    echo "</ul>";
    ?>
    <h3>Otra forma de hacer un while</h3>
    <?php
    $i = 1;
    echo "<ul>";
        do {
            echo "<li>$i</li>";
            $i++;
        } while ($i <= 10);
    echo "</u>";
    ?>
</body>
</html>