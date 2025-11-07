<?php
try {
    require_once __DIR__ . '/conexion.php';

    // Sentencia SQL con parámetros nombrados
    $sql = "INSERT INTO tienda (nombre, tlf) VALUES (:nombre, :tlf)";
    $stmt = $conn->prepare($sql);

    // Asociamos variables a los parámetros
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':tlf', $tlf);

    // Insertamos varios registros nuevos
    $nombre = "Librería Central";
    $tlf = "910223344";
    $stmt->execute();

    $nombre = "PetWorld";
    $tlf = "931445566";
    $stmt->execute();

    $nombre = "Muebles Rivera";
    $tlf = "945667788";
    $stmt->execute();

    echo "✅ Nuevos registros insertados correctamente usando bindParam().";

} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>