<?php 

use Instituto\InstitutoControlador;

function printerar(array $data) { 
    echo "<h1>Instituto (MVC - POO - PDO)</h1>";
    echo "<h2>📚 Cursos</h2>";
    echo "<ol>";
    foreach ($data['cursos'] as $curso) {
        echo "<li>{$curso['nombre']}</li>";
    }
    echo "</ol>";

    echo "<h2>👩‍🎓 Lista Inicial</h2>";
    echo "<ol>";
    foreach ($data['listaInicial'] as $listaInicial) {
        echo "<li>{$listaInicial['nombre']} ({$listaInicial['edad']} años) - Curso: {$listaInicial['nombre_curso']}</li>";
    }
    echo "</ol>";


    echo "<h2>✏️ Lista Modificada</h2>";
    echo "<ol>";
    foreach ($data['listaModificada'] as $listaModificada) {
        echo "<li>{$listaModificada['nombre']} ({$listaModificada['edad']} años) - Curso: {$listaModificada['nombre_curso']}</li>";
    }
    echo "</ol>";

    echo "<h2>🗑️ Lista Final</h2>";
    echo "<ol>";
    foreach ($data['listaFinal'] as $listaFinal) {
        echo "<li>{$listaFinal['nombre']} ({$listaFinal['edad']} años) - Curso: {$listaFinal['nombre_curso']}</li>";
    }
    echo "</ol>";
}