<?php
// Archivo: gestion_pedidos.php
// Función básica para registrar un pedido

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente_id = $_POST["cliente_id"];
    $producto_id = $_POST["producto_id"];
    $cantidad = $_POST["cantidad"];

    $sql = "INSERT INTO pedidos (cliente_id, producto_id, cantidad) VALUES ('$cliente_id', '$producto_id', '$cantidad')";
    if (mysqli_query($conn, $sql)) {
        echo "Pedido registrado correctamente.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
