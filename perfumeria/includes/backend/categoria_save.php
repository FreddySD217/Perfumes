<?php
require_once '../../conexion.php'; // asegúrate que esto apunta bien al archivo

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dato'])) {
    $categoria = trim($_POST['dato']);
    
    if ($categoria !== '') {
        $conn = conectar();
        $stmt = $conn->prepare("INSERT INTO categorias (nombre_categoria) VALUES (?)");
        $stmt->bind_param("s", $categoria);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}
?>
