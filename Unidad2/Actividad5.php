<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $numero1 = random_int(1,6);
        $numero2 = random_int(1,6);
        $suma = $numero1 + $numero2;

        echo "<img src='img/$numero1.svg'><img src='img/$numero2.svg'>";
        echo "<br>";
        echo "La suma es: " . $suma;
    ?>
</body>
</html>