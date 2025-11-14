<?php

namespace Curso;
use PDO;

class CursoModelo {
    protected PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function agregar(string $nombre) : int {
        $sql = "INSERT INTO cursos (nombre) VALUES (:nombre)";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':nombre', $nombre);
        $tmp->execute();
        $id = $this->pdo->lastInsertId();
        return $id;
    }

    public function idPorNombre(string $nombre) : ?int {
        $sql = "SELECT id FROM cursos WHERE nombre = :nombre";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':nombre', $nombre);
        $id = $tmp->execute();
        return $id;
    }

    public function todos() : array {   
        $sql = "SELECT * FROM cursos";
        $tmp = $this->pdo->prepare($sql);
        $tmp -> setFetchMode(PDO::FETCH_ASSOC);
        $tmp -> execute();

        $cursos = $tmp -> fetchAll();

        return $cursos;
    }

    public function vaciarTodo() : void {
        $this->pdo->exec("DELETE FROM cursos");
        $this->pdo->exec("ALTER TABLE cursos AUTO_INCREMENT = 1");
    }
}