<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP facil</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php 
        // Esto es un comentario en PHP
        /* 
         Este es en varias lineas
        */
        echo "<h1>Es muy facil programar en PHP.</h1>"; 

        $numero = 123;
        $pi = 3.14;
        $palabra = "hola";
        $suerte = true;
        echo $suerte;

        $sinvalor;
        echo $sinvalor;

        $numeroencadena = "10";
        $numero = intval($numeroencadena);
        echo $numero;
        echo "<br>";
        echo $numeroencadena;
        echo "<br>";

        $nombre = "ivan";
        echo(json_encode(isset($nombre)));
        echo "<br>";
        echo(json_encode(isset($apellidos)));        
        echo "<br>";

        echo $_SERVER['REMOTE_ADDR'] . "<br>";
        echo PHP_VERSION;

        $modulo = "DWES";
        echo "<p>Las siglas de este módulo es $modulo.</p>";
        echo '<p>Las siglas de este módulo es $modulo</p>';
    ?>
</body>
</html>