<?php 

namespace Estudiante;
use PDO;

class EstudianteModelo {
    protected PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function agregar(string $nombre, int $edad, ?int $cursoId = null) : int {
        $sql = "INSERT INTO estudiantes (nombre, edad, curso_id) VALUES (:nombre, :edad, :curso_id)";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':nombre', $nombre);
        $tmp->bindParam(':edad', $edad);
        $tmp->bindParam(':curso_id', $cursoId);

        $tmp->execute();
        $id = $this->pdo->lastInsertId();
        return $id;
    }

    public function actualizarPorNombre(string $nombreActual, string $nuevoNombre, int $nuevaEdad, int $nuevoCursoId) :void {
        $sql = "UPDATE estudiantes 
                SET nombre = :nombreNuevo, edad = :edad, curso_id = :curso_id
                WHERE nombre = :nombre";
        
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':nombre', $nombreActual);
        $tmp->bindParam(':edad', $nuevaEdad);
        $tmp->bindParam(':curso_id', $nuevoCursoId);
        $tmp->bindParam(':nombreNuevo', $nuevoNombre);

        $tmp->execute();
    }

    public function eliminarPorNombre(string $nombre) : void {
        $sql = "DELETE FROM estudiantes WHERE nombre = :nombre";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':nombre', $nombre);
        $tmp->execute();
    }

    public function conCurso() : array {
        $sql = "SELECT e.nombre, e.edad, c.nombre AS nombre_curso
                FROM estudiantes e
                LEFT JOIN cursos c
                ON e.curso_id = c.id";
        
        $tmp = $this->pdo->prepare($sql);
        $tmp->setFetchMode(PDO::FETCH_ASSOC);
        $tmp->execute();
        $array = $tmp->fetchAll();
        return $array;
    }

    public function vaciarTodo() : void {
        $this->pdo->exec("DELETE FROM estudiantes");
    }
}