<?php
session_start();

if (!isset($_SESSION['votosA'])) {
    $_SESSION['votosA'] = 0;
} 

if (!isset($_SESSION['votosB'])) {
    $_SESSION['votosB'] = 0;
} 

$opcion = $_POST['opcion'];

if (isset($opcion)) {
    switch($opcion){
        case "A":
            $_SESSION['votosA']++;
            break;
        case "B":
            $_SESSION['votosB']++;
            break;
        case "RESET":
            $_SESSION['votosA'] = 0;
            $_SESSION['votosB'] = 0;
            break;
    }
}

header("Location: act3_1.php");
