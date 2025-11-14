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

