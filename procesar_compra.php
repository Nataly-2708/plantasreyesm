<?php
include '../conexion.php';
session_start();

if (!isset($_SESSION['id_usuarios'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['id_usuarios'];

try {
    $pdo->beginTransaction();

    // Insertar la venta en la tabla ventas
    $stmt = $pdo->prepare("INSERT INTO ventas (id_usuarios, fecha, total_venta) VALUES (:user_id, NOW(), :total)");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':total', $_POST['total'], PDO::PARAM_INT);
    $stmt->execute();

    $venta_id = $pdo->lastInsertId();

    // Insertar los detalles de los productos en la tabla detalles_venta
    foreach ($_POST['productos'] as $producto) {
        $stmt = $pdo->prepare("INSERT INTO detalles_venta (id_venta, id_productos, cantidad) VALUES (:venta_id, :producto_id, :cantidad)");
        $stmt->bindParam(':venta_id', $venta_id, PDO::PARAM_INT);
        $stmt->bindParam(':producto_id', $producto['id'], PDO::PARAM_INT);
        $stmt->bindParam(':cantidad', $producto['cantidad'], PDO::PARAM_INT);
        $stmt->execute();
    }

    // Limpiar el carrito del usuario
    $stmt = $pdo->prepare("DELETE FROM carrito WHERE id_usuarios = :user_id");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $pdo->commit();
    echo "Compra realizada con éxito.";
} catch (Exception $e) {
    $pdo->rollBack();
    die("Error al procesar la compra: " . $e->getMessage());
}
?>
<form action="procesar_compra.php" method="POST">
    <input type="hidden" name="total" value="<?php echo $total; ?>">
    <input type="hidden" name="productos" value="<?php echo htmlspecialchars(json_encode($productos)); ?>">
    <button type="submit" class="botonTarjeta btn-lg">Comprar</button>
</form>
