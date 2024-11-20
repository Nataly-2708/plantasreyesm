<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- Aquí se llenará el contenido con PHP -->
        <?php
session_start();
require '../conexion.php'; // Conexión a la base de datos

$id_usuario = $_SESSION['id_usuario']; // Asumiendo que el usuario ha iniciado sesión

// Consulta los productos en el carrito
$query = "SELECT c.id_carrito, p.nombre, p.precio, c.cantidad 
          FROM carrito c 
          INNER JOIN productos p ON c.id_producto = p.id_producto 
          WHERE c.id_usuario = $1";
$stmt = pg_prepare($conexion, "mostrar_carrito", $query);
$result = pg_execute($conexion, "mostrar_carrito", array($id_usuario));

if (pg_num_rows($result) > 0) {
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['nombre']}</td>
                <td>{$row['cantidad']}</td>
                <td>{$row['precio']}</td>
                <td>" . ($row['cantidad'] * $row['precio']) . "</td>
                <td>
                    <form action='update_cart.php' method='POST'>
                        <input type='hidden' name='id_carrito' value='{$row['id_carrito']}'>
                        <input type='number' name='cantidad' value='{$row['cantidad']}' min='1'>
                        <button type='submit'>Actualizar</button>
                    </form>
                    <form action='delete_cart.php' method='POST'>
                        <input type='hidden' name='id_carrito' value='{$row['id_carrito']}'>
                        <button type='submit'>Eliminar</button>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>El carrito está vacío</td></tr>";
}
?>
<?php
session_start();
require 'conexion.php';

$id_carrito = $_POST['id_carrito'];
$cantidad = $_POST['cantidad'];

$query = "UPDATE carrito SET cantidad = $1 WHERE id_carrito = $2";
$stmt = pg_prepare($conexion, "update_cart", $query);
pg_execute($conexion, "update_cart", array($cantidad, $id_carrito));

header("Location: cart.php");
exit();
?>
<?php
session_start();
require 'conexion.php';

$id_carrito = $_POST['id_carrito'];

$query = "DELETE FROM carrito WHERE id_carrito = $1";
$stmt = pg_prepare($conexion, "delete_cart", $query);
pg_execute($conexion, "delete_cart", array($id_carrito));

header("Location: cart.php");
exit();
?>

    </tbody>
</table>
