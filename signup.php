<?php
include '../conexion.php'; // Asegúrate de que este archivo configura correctamente la conexión con PostgreSQL.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar datos enviados desde el formulario
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $correo = $_POST['correo'];
    $username = $_POST['username'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['floatingPasswordConfirm']; // Confirmación de contraseña

    try {
        // Validar que las contraseñas coincidan
        if ($password !== $confirm_password) {
            throw new Exception('Las contraseñas no coinciden.');
        }

        // Encriptar la contraseña
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insertar datos en la base de datos
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, correo, password, nombre_usuario, telefono) 
                       VALUES (:name, :last_name, :correo, :password, :username, :telephone)');

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':telephone', $telephone);

        // **Paso 1: Verificar si la ejecución tuvo éxito**
        if ($stmt->execute()) {
            echo "Usuario registrado correctamente"; // Muestra este mensaje si se registra con éxito.
            exit(); // Detén la ejecución aquí para verificar si todo funciona bien.
        } else {
            echo "Error al registrar usuario:";
            print_r($stmt->errorInfo()); // Muestra información detallada de error.
            exit(); // Detén la ejecución para analizar los errores.
        }
    } catch (Exception $e) {
        $error = 'Error en el registro: ' . $e->getMessage();
        echo $error; // Muestra el mensaje de error
    }
}
?>

//

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
  
    <title>Registro</title>
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
          <a class="nav-link" href="./CarritoDeCompras.php" id="carritoIcon">
            <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" alt="iconoCarrito">
          </a>
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

<!--Inicio de sing.up -->
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-xl-12 mx-auto">
        <div class="card flex-row my-5 overflow-hidden" id="idContenedorPrincipal">
          <div class="card-img-left d-none d-md-flex ">
                    <!-- Imagen de la derecha con ancho ajustado -->
        <div class="card-img-left d-none d-md-flex" style="width: 100%; max-width: 500%;">
          <img src="https://images.unsplash.com/photo-1589991279867-10e854e743f0?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
               class="img-fluid" alt="Imagen decorativa" style="object-fit: cover; width: 100%; height: auto;">
        </div>
              <!-- Background image for card set in CSS! -->
              <div class="vr" ></div>
          </div>

        <!-- Inicia formulario -->
        
          <div class="card-body p-4 p-sm-5">
            <h5 class="titulos card-title text-center mb-5 fw-light " id="Registrate_titulo">Registrarse</h5>
           
            <form method="POST" action="signup.php" novalidate>
              <div class="row mb-3">
                <div class="form-floating col-6">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Nombre" required>
                    <label for="floatingName" id="text_label_Nom_Ape">Nombre</label>
                </div>
                <div class="form-floating col-6">
                    <input type="text" name="last_name" class="form-control" id="floatingLastName" placeholder="Apellido" required>
                    <label for="floatingLastName" id="text_label_Nom_Ape">Apellido</label>
                </div>
              </div>

              <div class="form-floating mb-3">
                  <input type="email" name="correo" class="form-control" id="floatingInputEmail" placeholder="Correo electronico" required>
                  <label for="floatingInputEmail">Correo electrónico</label>
              </div> 

              <div class="form-floating mb-3">
                  <input type="email" name="correo" class="form-control" id="floatingInputEmailConfirm" placeholder="Confirmar correo electrónico" required>
                  <label for="floatingInputEmailConfirm">Confirmar correo electrónico</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="text" name="username" class="form-control" id="floatingUserName" placeholder="Nombre de usuario" required>
                  <label for="floatingUserName">Nombre de usuario</label>
              </div>
                  
              <div class="form-floating mb-3">
                  <input type="tel" name="telephone" class="form-control" id="floatingInputCel" placeholder="Número de teléfono" required>
                  <label for="floatingInputCel">Número telefónico</label>
                  <p class="description">A 10 dígitos</p>
              </div>

              <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Contraseña" required>
                  <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="password" name="floatingPasswordConfirm" class="form-control" id="floatingPasswordConfirm" placeholder="Confirmar contraseña" required>
                  <label for="floatingPasswordConfirm">Confirmar contraseña</label>
              </div>
               
              <div class="d-grid mb-2">
                  <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="reset">Cancelar</button>
                  <button class="btn btn-primary btn-login fw-bold text-uppercase col-5" type="submit">Crear Cuenta</button>
              </div>
          </form>
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
<!--___________________________________________FIN PIE DE PAGINA___________________________________________-->  

  <!-- Scripts -->
  <script src="../js/signup.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="/js/UserStatus.js"></script>
  <script src="/js/carritoSpan.js" type="module"></script>
</body>
</html>