<?php

session_start();

if (!isset($_SESSION['numeroSecreto'])) {
    $_SESSION['numeroSecreto'] = random_int(1, 10);
}

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}


if (!empty($_POST)) {
    $numeroUsuario = $_POST['numero'];
    if (!empty($numeroUsuario)) {
        if ($numeroUsuario > 0 && $numeroUsuario <= 10) {
            if ($numeroUsuario < $_SESSION['numeroSecreto']) {
                $error = "El numero es mayor";
                $_SESSION['intentos']++;
            } else if ($numeroUsuario > $_SESSION['numeroSecreto']) {
                $error = "El numero es menor";
                $_SESSION['intentos']++;
            } else if ($numeroUsuario == $_SESSION['numeroSecreto']) {
                $error = "¡¡¡ Acertaste !!! Has necesitado " . $_SESSION['intentos'] . " intento(s).";
                unset($_SESSION);
                session_destroy();
            }
        } else {
            $error = "Error: Escribe un numero entre 1 y 10";
        }
    } else {
        $error = "Error: Escribe un numero para enviar";
    }
} else {
    $error = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../pico.min.css">
</head>

<body>
    <h1>Número Secreto: Elige número entre 1 y 10</h1>

    <form action="" method="post">
        <label>Número: <input type="number" name="numero"></label>
        <input type="submit" value="Enviar">
    </form>
    <?= $error; ?>
</body>

</html>