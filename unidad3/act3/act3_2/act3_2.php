<?php
/*
---
title: Ejercicio 2: Login sencillo con sesiones
desc: Crea un sistema de login básico utilizando sesiones para gestionar el acceso de usuarios. Muestra mensajes de error para credenciales incorrectas.
tags: [login, sesiones, autenticacion]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$usuario = "correo@falso.com";
$contrasena = 123;
$error = '';

if (isset($_POST['email']) && isset($_POST['contrasena'])) {
    $usuario_formulario = $_POST['email'];
    $contrasena_formulario = $_POST['contrasena'];

    if ($usuario == $usuario_formulario && $contrasena == $contrasena_formulario) {
        session_start();
        $_SESSION['email'] = $usuario_formulario;
        header("Location: privado.php");
    } else {
        $error = "⚠️ Email o contraseña incorrectos.";
    }

} else {
    if (!empty($_POST)) {
        $error = "⚠️ Debes introducir el email y la contraseña.";
    } else {
        $error = '';
    }
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
    <style>
        .container {
            max-width: 600px;
            margin-top: 2rem;
            border: solid 3px black;
            padding: 10px;
            box-shadow: 10px 10px 10px gray;
            border-radius: 2%;
        }

        meter {
            width: 100%;
            height: 3rem;
        }

        h1 {
            color: chocolate;
        }

        h2 {
            color: chocolate;
        }

        input[type="password"] {
            display: block;
            width: 200px;
        }

        p {
            color: red;
        }

        a {
            display: block;
            /* lo convierte en bloque */
            width: 600px;
            /* ancho fijo o mÃ¡ximo deseado */
            margin: 0 auto;
            /* lo centra horizontalmente */
            text-align: center;
            /* centra el texto dentro */
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Acceso al Sistema</h1>

        <?= $error; ?>

        <form method="post" action="">
            <label>
                Email:
                <input type="email" name="email" placeholder="Email" value="">
            </label>
            <label>
                Contraseña:
                <input type="password" name="contrasena" placeholder="Contraseña">
            </label>
            <button type="submit">Entrar</button>
        </form>
        <p>
            📌 <strong>Usuario de prueba:</strong> <em>correo@falso.com</em><br>
            🔑 <strong>Contraseña:</strong> <em>123</em>
        </p>
        <a href="privado.php">Acceso a Zona Privada (Sesión iniciada)</a>
    </main>
</body>

</html>