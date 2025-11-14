<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>

<body>
    <main class="container">
        <h1>Instituto (MVC - POO - PDO)</h1>
        <h2>📚 Cursos</h2>
        <ol>

            <?php
            foreach ($data['cursos'] as $curso) {
                echo "<li>{$curso['nombre']}</li>";
            }
            ?>
        </ol>

        <h2>👩‍🎓 Lista Inicial</h2>
        <ol>
            <?php
            foreach ($data['listaInicial'] as $listaInicial) {
                echo "<li>{$listaInicial['nombre']} ({$listaInicial['edad']} años) - Curso: {$listaInicial['nombre_curso']}</li>";
            }
            ?>
        </ol>


        <h2>✏️ Lista Modificada</h2>
        <ol>
            <?php
            foreach ($data['listaModificada'] as $listaModificada) {
                echo "<li>{$listaModificada['nombre']} ({$listaModificada['edad']} años) - Curso: {$listaModificada['nombre_curso']}</li>";
            }
            ?>
        </ol>

        <h2>🗑️ Lista Final</h2>
        <ol>
            <?php
            foreach ($data['listaFinal'] as $listaFinal) {
                echo "<li>{$listaFinal['nombre']} ({$listaFinal['edad']} años) - Curso: {$listaFinal['nombre_curso']}</li>";
            }
            ?>
        </ol>
    </main>
</body>

</html>