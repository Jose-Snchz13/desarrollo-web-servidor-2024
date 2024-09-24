<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
        echo date("l/j/m/y");
        if(date ("j") % 2 == 0) echo "<p>Es par</p>";
        else echo "<p>Es impar</p>";
    ?>
</body>
</html>