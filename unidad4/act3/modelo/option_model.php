<?php 

namespace Option;
use PDO;

class OptionModel {
    protected PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerOpciones() {
        $sql = "SELECT opcion FROM votaciones";
        $tmp = $this->pdo->prepare($sql);
        $tmp -> setFetchMode(PDO::FETCH_ASSOC);
        $tmp -> execute();

        $opciones = $tmp -> fetchAll();

        return $opciones;
    }

    public function agregarOpcion(string $texto) {
        $sql = "INSERT INTO votaciones (opcion, votos) VALUES (:opcion, :votos)";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':opcion', $texto);
        $tmp->bindParam(':votos', 0);
        $tmp->execute();
    }

    public function votar(int $id) {
        $sql = "UPDATE votaciones SET votos=votos+1 WHERE id = :id";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':id', $id);
        $tmp->execute();
    }

    public function eliminar(int $id) {
        $sql = "DELETE FROM votaciones WHERE id = :id";
        $tmp = $this->pdo->prepare($sql);

        $tmp->bindParam(':id', $id);
        $tmp->execute();
    }
}