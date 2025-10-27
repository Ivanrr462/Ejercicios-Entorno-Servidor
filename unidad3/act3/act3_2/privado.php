<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: act3_2.php");
} else {
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
        <p>
            <strong>¡Te encuentras en una zona secreta!, solo visible por una persona identificada.</strong>
        </p>
        <a href="cerrar-sesion.php">Cerrar Sesión</a>
    </main>
</body>

</html>

<?php 
    }
?>