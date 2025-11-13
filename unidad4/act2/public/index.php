<?php 
    require __DIR__ . '/../config.php';
    require __DIR__ . '/../modelo/curso_modelo.php';
    require __DIR__ . '/../modelo/estudiante_modelo.php';
    require __DIR__ . '/../controlador/instituto_controlador.php';
    use Curso\CursoModelo;
    use Estudiante\EstudianteModelo;
    use Instituto\InstitutoControlador;
    $conn = new PDO(DB_DSN, DB_USER, DB_PASS);
    $modeloCurso = new CursoModelo($conn);
    $modeloestudiante = new EstudianteModelo($conn);

    $controlador = new InstitutoControlador($modeloCurso, $modeloestudiante);

    $data = $controlador->ejecutar();
    require __DIR__ . '/../vista/vista_instituto.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
    <?= printerar($data); ?>
</body>
</html>