<!-- Inicio de la bd -->
<?php
include '../conexion.php';

// Asegúrate de que el usuario esté autenticado
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['id_usuarios']; // ID del usuario autenticado

try {
    // Consultar los productos del carrito del usuario
    $stmt = $pdo->prepare("
        SELECT p.id_productos, p.nombre_producto, p.precio, c.cantidad
        FROM carrito c
        INNER JOIN productos p ON c.id_productos = p.id_productos
        WHERE c.id_usuarios = :user_id
    ");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al cargar el carrito: " . $e->getMessage());
}
?>
<!--Fin de la bd -->

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Style+Script&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../styles/contactanos.css">
  <link rel="stylesheet" href="../styles/Navbar.css">
 
  <script src="../js/contacto.js" async defer></script>
  <title>contactanos</title>
</head>
<body>
<!-- Inicia Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img class="rounded-circle" src="../assets/images/logoNavbar.png" width="60rem" alt="Plantas Reyes" />
    <a class="title" href="../index.php">
      <h4>PLANTAS REYES</h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse font-navbar" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./sobre-nosotros.php">Sobre nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./catalogo.php">Catálogo de productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pAM.php">Proyectos a medida</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contactanos.php">Contáctanos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./CarritoDeCompras.php">Carrito de compras</a>
        </li>

        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="./CarritoDeCompras.php" id="carritoIcon">
            <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" alt="iconoCarrito">
          </a>
        </li>
        </li>
        <li class="nav-item dropdown" id="Usuario-Estatus">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Iniciar sesión
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../pages/login.php">Ingresa a tu cuenta</a></li>

            <li>
              <a class="dropdown-item" href="../pages/signup.php">Regístrate</a>
            </li>

          </ul>
        </li>

    </div>
  </div>
</nav>
<!--fin del navbar-->


  <!-- HEADER CARRITO-->
  <div class="d-flex justify-content-center row">
    <div class="col-md-10" id="elementosCarritos">
        <?php if (!empty($productos)) : ?>
            <?php foreach ($productos as $producto) : ?>
                <div class="row p-2 bg border rounded itemComp align-items-center">
                    <div class="col-md-3 mt-1">
                        <img class="img-fluid img-responsive rounded product-image" 
                             src="../assets/images/<?php echo $producto['id_productos']; ?>.jpg" alt="<?php echo $producto['nombre_producto']; ?>">
                    </div>
                    <div class="col-md-6 mt-1">
                        <h5><?php echo $producto['nombre_producto']; ?></h5>
                        <p>Cantidad: <?php echo $producto['cantidad']; ?></p>
                        <h6 class="text-success">Precio: $<?php echo $producto['precio']; ?></h6>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger btn-sm" onclick="eliminarProducto(<?php echo $producto['id_productos']; ?>)">Eliminar</button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No tienes productos en tu carrito.</p>
        <?php endif; ?>
    </div>
</div>

<?php
$total = 0;
foreach ($productos as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
}
?>
<p id="total">Total a pagar: $<?php echo $total; ?></p>





    </div>
    <script src="../js/carritoSpan.js" type="module"></script>
    <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <script src="../js/carritoSpan.js" type="module"></script>
    <script src="../js/UserStatus.js"></script>

</body>

</html>