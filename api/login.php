<!-- Inicio de base de datos login-->
<?php
include '../conexion.php';
session_start(); // Inicia la sesión para gestionar los usuarios logueados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        // Consulta para validar usuario
        $stmt = $pdo->prepare('SELECT id, password FROM usuarios WHERE email = :email');
        $stmt->bindParam(':correo', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Usuario autenticado
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php'); // Redirige al usuario al dashboard
            exit();
        } else {
            $error = 'Correo o contraseña incorrectos';
        }
    } catch (PDOException $e) {
        error_log('Error en el inicio de sesión: ' . $e->getMessage());
        $error = 'Ha ocurrido un error. Intenta nuevamente más tarde.';
    }
}
?>

<!-- HTML permanece igual -->

<!-- Fin de base de datos login-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Style+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../styles/login-signup.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  
    <title>Iniciar sesión</title>
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

<div class="container">
    <div class="row">
      <div class="col-lg-9 col-xl-12 mx-auto">
        <div class="card flex-row my-5 overflow-hidden" id="idContenedorPrincipal">
          <div class="card-img-left d-none d-md-flex" style="width: 500px; max-width: auto;">
            <img src="https://images.unsplash.com/photo-1615463366922-26e1f34b56ef?q=80&w=1335&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                 class="img-fluid" alt="Imagen decorativa" style="object-fit: cover; width: 100%; height: auto;">
          </div>

          <!-- Inicia formulario -->
          <div class="card-body p-4 p-sm-5">
            <h5 class="titulos card-title text-center mb-5 fw-light" id="IniciaSesion_titulo">INICIAR SESIÓN</h5>
           
            <form method="POST" id="logIn" novalidate>
              <div class="row mb-3"></div>
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" required>
                  <label for="floatingInputEmail">Correo electrónico</label>
                  <hr>
                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Contraseña</label>
                  </div>

                  <!-- alert -->
                  <div id="liveAlertPlaceholder"></div>

                  <?php if (isset($error)): ?>
                  <div class="alert alert-danger" role="alert">
                      <?php echo htmlspecialchars($error); ?>
                  </div>
                  <?php endif; ?>

                  <div class="d-grid mb-2">
                    <div class="row">
                      <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="reset" id="mainButtonCancel">Cancelar</button>
                      <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="submit" id="mainButton">Iniciar Sesión</button>
                    </div>
                  </div>
                  <a class="d-block text-center mt-2 small text-decoration-none" href="./signup.php">¿No tienes una cuenta? Crea tu cuenta.</a>
                  <a class="d-block text-center mt-2 small text-decoration-none" href="./forgotPassword.php">Olvidé mi contraseña.</a>
                  <hr class="my-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


   <!-- Inicio Pie de página -->
<div id="footer" class="container-fluid" style="background-color: #587742; color: #ffffff; padding: 20px;">
  <div class="row">
    <!-- Columna con el mensaje grande -->
    <div class="col-12 text-center">
      <h2 style="font-size: 2rem; margin-bottom: 20px;">¡Gracias por confiar en nosotros!</h2>
    </div>

    <!-- Columna izquierda con telefono -->
    <div class="col-md-4 text-left">
      <p style="font-size: 1.2rem; margin-bottom: 5px; color: #223b10;"><i class="bi bi-telephone-fill"></i> Teléfono: 55 5275 0932</p>
      <p style="font-size: 1.2rem; margin-bottom: 5px;">
        <a href="../pages/sobre-nosotros.php" style="text-decoration: none; color: #223b10;"><i class="bi bi-info-circle-fill"></i> Sobre Nosotros</a>
      </p>
    </div>

    <!-- Columna central con redes sociales -->
    <div class="col-md-4 text-center">
      <p style="font-size: 1.2rem; margin-bottom: 5px; color: #223b10;">Síguenos en:</p>
      <a href="https://www.facebook.com/p/Plantas-Reyes-100088890480708/?locale=es_LA" target="_blank" style="margin-right: 10px; color: #8FBC8F;">
        <img src="https://img.icons8.com/?size=100&id=59780&format=png&color=000000" alt="Facebook" width="35px" height="35px">
        
      </a>
     
      <a href="https://www.instagram.com/ernestogabrielreyesmaulen?igsh=MTFibW1vZnU4dWozbw==" target="_blank" style="margin-right: 10px; color: #8FBC8F;">
        <img src="https://img.icons8.com/?size=100&id=85140&format=png&color=000000" alt="Instagram" width="40px" height="40px">
      </a>
</div>

    <!-- Columna derecha con correo -->
    <div class="col-md-4 text-right">
      <p style="font-size: 1.2rem; margin-bottom: 5px; color:#223b10; "><i class="bi bi-correo"></i> Correo: martinreyese27@gmail.com</p>
    </div>
</div>
<!-- Fin Pie de página -->

<!-- Scripts -->
  <script src="../js/loginData.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  <script src="/js/carritoSpan.js" type="module"></script>
  <script src="/js/UserStatus.js"></script>
</body>
</html>