<?php
$pdo = new PDO("mysql:host=localhost;dbname=delivery", "root", "");
$stmt = $pdo->query("SELECT direccion, latitud, longitud FROM direcciones");
$ubicaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($ubicaciones);
?>
