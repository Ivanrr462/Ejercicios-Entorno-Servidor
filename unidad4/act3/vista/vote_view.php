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
        <h1>🗳️ Votaciones</h1>
        <br><br>
        <form method="post">
            <?php 
                foreach (as $opcion) {
                    echo "<label><input type='radio' name='voto' value='23' required>$opcion['nombre']</label><br>";
                }
            ?>
            <button>Votar</button> <small>Total: 22</small>
        </form>

        <h3>Resultados</h3>
        <table>
            <tr>
                <th>Opción</th>
                <th>Votos</th>
                <th>%</th>
                <th>Eliminar</th>
            </tr>

            <?php 
                foreach (as $opcion) {
                    echo "<tr>";
                    echo "<td>$opcion['nombre']</td>";
                    echo "<td>$opcion['votos']</td>";
                    echo "<td></td>";
                    echo "<td><form method='post' style='margin:0'>
                        <button name='eliminar' value='23'>❌</button>
                    </form></td>";
                    echo "</tr>";
                }

            ?>            
        </table>

        <h3>➕ Nueva opción</h3>
        <form method="post">
            <input name="texto" placeholder="Nueva opción..." required>
            <button>Agregar opción</button>
        </form>
    </main>
</body>

</html>