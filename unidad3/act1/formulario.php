<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/errores.log');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$url = $_POST['url'];
$aficiones = $_POST['aficiones'];
$numero_convivientes = $_POST['convivientes'];
$aficiones_permitidas = ['lec', 'dep', 'via', 'cin'];
$menu = $_POST['menu'];

if (!empty($nombre))
    echo "El nombre es " . htmlspecialchars($nombre);
else
    echo 'No se ha especificado el nombre';

if (!empty($apellidos))
    echo "Los apellidos son " . htmlspecialchars($apellidos);
else
    echo 'No se han especificado los apellidos';

if (!empty($email))
    echo "El email es " . htmlspecialchars($email);
else
    echo 'No se ha especificado el email';

if (!empty($url))
    echo "La url es " . htmlspecialchars($url);
else
    echo 'No se ha especificado la url';

define('OPCIONES', ['m', 'f', 'o']);
if (!empty($_POST['genero'])) {
    if (in_array($_POST['genero'], OPCIONES))
        $generovalor =  "Tu género es " . $_POST['genero'];
    else
        echo 'El género no tiene un valor válido';
} else
    echo 'El género no se ha recibido';

if (!empty($numero_convivientes))
    if ($numero_convivientes <= 5 && $numero_convivientes > 0)
        echo "El numero de convivientes es " . $numero_convivientes;
    else 
        echo "Convivientes debe ser un número entero entre 0 y 5.";
else
    echo 'Convivientes debe ser un número entero entre 0 y 5';

define('OPCIONESAFICIONES', ['lec', 'dep', 'cin', 'via']);
if (!empty($_POST['aficiones']) && is_array($_POST['aficiones'])) {
    $no_validos = array_diff($_POST['aficiones'], $aficiones_permitidas);
    if (count($no_validos) == 0)
        echo 'Las aficiones recibidas están dentro de los esperadas y son: ' . implode(', ', $_POST['aficiones']);
    else
        echo 'Se han recibido aficiones no esperadas';
} else
    echo 'No se han recibido las aficiones o no son del tipo esperado.';

define('OPCIONESCOMIDA', ['pasta', 'sushi', 'ensalada', 'pizza']);
if (!empty($menu)) {
    if (in_array($menu, OPCIONESCOMIDA)) 
        echo "Menu: Se ha recibido " . $menu;
    else 
        echo "Menu no tiene un valor válido";
} else {
    echo "El pais no tiene un valor válido";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css"
    />
    <link rel="stylesheet" href="codigo1.css" />
</head>
<body>
    <h1>Tabla-resumen</h1>
    <ul>
        <?php
            
        ?>
    </ul>
</body>
</html>