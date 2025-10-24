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

$errores = [];
$valores = [
    'nombre' => '',
    'apellidos' => '',
    'email' => '',
    'url' => '',
    'genero' => '',
    'convivientes' => '',
    'aficiones' => '',
    'menu' => ''
];

if (!empty($nombre))
    $valores['nombre'] = "El nombre es " . htmlspecialchars($nombre);
else
    $errores[] = 'No se ha especificado el nombre';

if (!empty($apellidos))
    $valores['apellidos'] = "Los apellidos son " . htmlspecialchars($apellidos);
else
    $errores[] = 'No se han especificado los apellidos';

if (!empty($email))
    $valores['email'] = "El email es " . htmlspecialchars($email);
else
    $errores[] = 'No se ha especificado el email';

if (!empty($url))
    $valores['url'] = "La url es " . htmlspecialchars($url);
else
    $errores[] = 'No se ha especificado la url';

define('OPCIONES', ['m', 'f', 'o']);
if (!empty($_POST['genero'])) {
    if (in_array($_POST['genero'], OPCIONES))
        $valores['genero'] = "Tu género es " . $_POST['genero'];
    else
        $errores[] = 'El género no tiene un valor válido';
} else
    $errores[] = 'El género no se ha recibido';

if (!empty($numero_convivientes))
    if ($numero_convivientes <= 5 && $numero_convivientes > 0)
        $valores['convivientes'] = "El numero de convivientes es " . $numero_convivientes;
    else
        $errores[] = "Convivientes debe ser un número entero entre 0 y 5.";
else
    $errores[] = 'Convivientes debe ser un número entero entre 0 y 5';

define('OPCIONESAFICIONES', ['lec', 'dep', 'cin', 'via']);
if (!empty($_POST['aficiones']) && is_array($_POST['aficiones'])) {
    $no_validos = array_diff($_POST['aficiones'], $aficiones_permitidas);
    if (count($no_validos) == 0)
        $valores['aficiones'] = 'Las aficiones recibidas están dentro de los esperadas y son: ' . implode(', ', $_POST['aficiones']);
    else
        $errores[] = 'Se han recibido aficiones no esperadas';
} else
    $errores[] = 'No se han recibido las aficiones o no son del tipo esperado.';

define('OPCIONESCOMIDA', ['pasta', 'sushi', 'ensalada', 'pizza']);
if (!empty($menu)) {
    if (in_array($menu, OPCIONESCOMIDA))
        $valores['menu'] = "Menu: Se ha recibido " . $menu;
    else
        $errores[] = "Menu no tiene un valor válido";
} else {
    $errores[] = "El pais no tiene un valor válido";
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
        href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css" />
    <link rel="stylesheet" href="codigo1.css" />
</head>

<body>
    <?php
    if (!empty($errores)) {
        echo "<h2>Errores encontrados:</h2><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Tabla resumen</h2><table border='1'>";
        foreach ($valores as $clave => $valor) {
            echo "<tr><th>$clave</th><td>$valor</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>