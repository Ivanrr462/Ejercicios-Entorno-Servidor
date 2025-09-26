<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $host = "localhost"; // cadena obligatoria 
    $puerto = "3306"; // debería ser entero, pero llega como cadena 
    $usuario = "root"; // cadena obligatoria 
    $clave = null; // debería ser cadena, pero está vacía 
    $debug = "true"; // debería ser booleano

    print_r($host . "<br>");
    print_r($puerto . "<br>");
    print_r($usuario . "<br>");
    print_r($clave . "<br>");
    print_r($debug . "<br>");

    echo var_dump($host . "<br>");
    echo var_dump($puerto . "<br>");
    echo var_dump($usuario . "<br>");
    echo var_dump($clave . "<br>");
    echo var_dump($debug . "<br>");

    $puerto = settype($puerto, "integer");
    $debug = settype($debug, "boolean");

    ?>
</body>

</html>