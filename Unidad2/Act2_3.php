<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = random_int(-1,1);
        echo ($numero <=> 0) < 0 ? "Negativo" : (($numero <=> 0) > 0 ? "Positivo" : "Cero");
        
    ?>
</body>
</html>