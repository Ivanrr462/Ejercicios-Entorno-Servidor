<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$url = $_POST['url'];
$genero = $_POST['genero'];
$aficiones = $_POST['aficiones'];
$numero_convivientes = $_POST['convivientes'];
$aficiones_permitidas = ['lec', 'dep', 'via', 'cin'];
$menu = $_POST['menu'];

if (!empty($nombre) || !empty($apellidos) || !empty($email) || !empty($url) || !empty($genero) 
    || !empty($numero_convivientes) || !empty($aficiones || !empty($menu))) {
        echo "
            <ul>
                <li></li>
            </ul>
        ";
    }