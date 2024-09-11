<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo_carga = $_POST['tipo_carga'];
    $tamano_carga = $_POST['tamano_carga'];
    $estado = $_POST['estado'];
    $costo = $_POST['costo'];

    $sql = "INSERT INTO cargas (tipo_carga, tamano_carga, estado, costo) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tipo_carga, $tamano_carga, $estado, $costo]);

    echo "Carga registrada exitosamente.";
}
?>
