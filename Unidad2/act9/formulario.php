<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$pais = $_POST['pais'];
$lenguajes = $_POST['lenguajes'];

if (!empty($nombre)) {
    echo "El nombre es " . $nombre;
} else {
    echo "No se ha especificado el nombre";
}
echo "<br>";

if (!empty($apellidos)) {
    echo "Los apellidos son " . $apellidos;
} else {
    echo "No se han especificado los apellidos";
}
echo "<br>";

define('OPCIONES', ['es', 'mx', 'ar', 'co']);
if (!empty($pais)){
    if (in_array($pais, OPCIONES)){
        echo "Pais: Se ha recibido " . $pais;
    } else 
        echo "El pais no tiene un valor válido";
} else 
    echo "El pais no se ha recibido";
echo "<br>";

$lenguajes_permitidos = ['html', 'css', 'javascript', 'php'];
if (!empty($lenguajes) && is_array($lenguajes)){
    $no_validos = array_diff($lenguajes, $lenguajes_permitidos);
    if (count($no_validos) == 0) {
        echo "Los lenguajes recibidos están dentreo de los esperados y son: ".implode(', ',$lenguajes);
    } else 
        echo "Se han recibido lenguajes no esperados";
} else 
    echo "No se han recibido los lenguajes o no son del tipo esperado";

echo "<br>";