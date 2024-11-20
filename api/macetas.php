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

  <script src="/js/macetas.js" type="module" async defer></script>
  <title>Macetas</title>
</head>

<body>
<!-- Navbar -->
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
            <a class="nav-link" href="/pages/CarritoDeCompras.php" id="carritoIcon">
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
   <!-- Header -->
<div class="fondo d-flex justify-content-center align-items-center" style="background-color: #576e4c; padding: 20px;">
  <div class="border border-0 text-center" style="margin: 0;">
    <div id="header" style="font-size: 36px; font-weight: bold; color: #ffffff; text-align: center;">
      Catálogo de Macetas
    </div>
  </div>
</div>
<!-- Fin Header -->


<!-- Barra con texto -->
<div class="misionVision d-flex justify-content-md-center" id="titulo-encabezado-PI">
  <div class="col-md-12">
    <div class="border border-0 text-center"><br>
      <div id="barra"><b>¡Explora la variedad de tamaños de macetas para tu lugar especial!</b></div><br>
    </div>
  </div>
</div>
<!-- Fin Barra con texto -->

<!-- Product cards -->
<div class="container my-4">
  <div class="row" id="container-cards">
    <!-- Plant Cards -->
      
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1710900831573-4c86cecd6fc4?q=80&w=1335&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
        class="card-img-top" alt="Maceta1"
        style="width: 355px; height: 450px;">
        <div class="card-body;">
          <h5 class="card-title">Maceta de Cerámica Blanca </h5>
          <p class="card-text">Ideal para mantener el ambiente del hogar.</p>
          <p class="card-text"><strong>Precio: $120 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <!-- Maceta2 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1708743143274-ab820c191d97?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWFjZXRhJTIwY29sZ2FudGV8ZW58MHx8MHx8fDI%3D"
         class="card-img-top" alt="Maceta2"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Maceta Colgante  </h5>
          <p class="card-text">Ofrece una vibra diferente para tu jardín.</p>
          <p class="card-text"><strong>Precio: $90 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>
        <!-- Maceta 3 -->
        <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://plus.unsplash.com/premium_photo-1678912442403-e783a4f593ba?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Maceta3"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Maceta  de Plástico</h5>
          <p class="card-text"> Para transplantar y transportar tus plantas.</p>
          <p class="card-text"><strong>Precio: $100 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>
 <!-- Maceta 4 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://plus.unsplash.com/premium_photo-1679093464714-f3af9620c4de?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Maceta4"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title">Maceta de Madera Natural</h5>
          <p class="card-text">Para transportar tus plantas.</p>
          <p class="card-text"><strong>Precio: $10 MXN</strong></p>
    
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>
     <!-- Maceta 5 -->
     <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1700751615345-0e86e04bb424?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Maceta5"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title"> Maceta Gigante        </h5>
          <p class="card-text">Ideal para estas plantas especiales.</p>
          <p class="card-text"><strong>Precio: $300 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <!-- Rosas Rojas -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1589711076926-9838bffba23d?q=80&w=1335&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         class="card-img-top" alt="Maceta6s"
         style="width: 355px; height: 450px;">
        <div class="card-body">
          <h5 class="card-title"> Maceta Mini </h5>
          <p class="card-text">Encaja a la perfeccion en cualquier lugar. </p>
          <p class="card-text"><strong>Precio: $30 MXN</strong></p>
          <button class="btn btn-success">Añadir al carrito</button>
        </div>
      </div>
    </div>


    <!-- Add more plants as necessary -->
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

<script src="/js/carritoSpan.js" type="module"></script>
<script src="/js/UserStatus.js"></script>
</body>
</html>