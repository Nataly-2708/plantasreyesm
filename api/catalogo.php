<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../styles/catalogo.css">
  <link rel="stylesheet" href="../styles/Navbar.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <script src="../js/catalogue-cards.js" type="module" async defer></script>
  <title>Catálogo de Productos</title>
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
    
     
  <!-- Header -->
  <div class="fondo d-flex justify-content-center align-items-center" style="background-color: #576e4c; padding: 20px;">
  <div class="border border-0 text-center" style="margin: 0;">
    <div id="header" style="font-size: 30px; font-weight: bold; color: #ffffff; text-align: center;">
      Catálogo de Productos
    </div>
  </div>
</div>
<!-- Fin Header -->

 <!--Inicio de Catalogo-->

    <br>
    <p class="card-text text-center" id="parrafo-pam">
    ¡Encuentra Todo lo Que Necesitas para Tu Jardín! <br>
En Plantas Reyes, nos esforzamos por ofrecerte una amplia variedad de productos que complementen el cuidado de tu jardín:<br>
 desde herramientas de jardinería hasta macetas y accesorios decorativos.
    </p>
  
</div>

     
  <!-- Final de Catalogo->


  <!-- Inicio tarjetas -->
  <br><br>
  <div>
<div class="col-12  text-center">
  <div class="container">
  <div class="row">  <!-- row-cols-1 row-cols-md-3 g-4-->
    <div class="col">
      <a href="plantas.php">
      <div class="card shadow p-3 mb-3 bg-body rounded" id="tarjetas">
        <img src="../assets/images/Plantas.png" class="card-img-top" alt="Plantas">
        <div class="card-body">
          <h5 class="card-title" id="titulosC">Plantas</h5>
        </div>
      </a>
      </div>
    </div>
    <div class="col">
      <a href="macetas.php">
      <div class="card shadow p-3 mb-3 bg-body rounded" id="tarjetas">
        <img src="../assets/images/Accesorios (2).jpg" class="card-img-top" alt="Accesorios">
        <div class="card-body">
          <h5 class="card-title" id="titulosC">Macetas</h5>
        </div>
      </a>
      </div>
    </div>
    <div class="col">

      <a href="herramientas.php">
      <div class="card shadow p-3 mb-3 bg-body rounded" id="tarjetas">
        <img src="../assets/images/Guiasdecuidado (2).png" class="card-img-top" alt="rip">
        <div class="card-body">
          <h5 class="card-title" id="titulosC">Herramientas</h5>
        </div>
      </a>
      </div>
    </div>
  </div>
</div>
 
  <!-- Final tarjetas -->
  <div class="row">
    <h2 class="subtitle">¿Buscas algo más grande?</h2>
  </div>

  <!-- Product cards-->
  <div class="row" id="container-cards">
    <div class="col-sm-12 container text-center">
    <!--<div class="container"></div>-->
    </div>
  </div>
  
  <div class="row">
    <div class="col text-center" id="final-text">¿No encuentras lo que buscas? Echa un vistazo a <a href="./pAM.php" class="link">Proyectos a la Medida</a>
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



<script src="../js/carritoSpan.js" type="module" async defer></script>
<script src="../js/UserStatus.js"></script>

</body>

</html>

<style>
  #footer {
    background-color: #587742;  /* Color de fondo */
    padding: 2rem 0;  /* Espaciado superior e inferior */
  }

  #footer h2 {
    font-size: 2.5rem;  /* Tamaño grande para el mensaje principal */
    color: #fffff1;  /* Color del texto */
    margin-bottom: 1rem;
  }

  #footer p {
    font-size: 1rem;  /* Tamaño pequeño para los detalles */
    color: #fffff1;  /* Color gris para los textos más pequeños */
    margin: 0.5rem 0;
  }

</style>
