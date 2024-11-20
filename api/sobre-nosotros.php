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
  <link rel="stylesheet" href="../styles/sobre-nosotros.css">
  <link rel="stylesheet" href="../styles/Navbar.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <title>Sobre_nosotros</title>
</head>

<body> <!-- Inicia Navbar -->
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
        </ul>
      </div>

    </div>
  </nav>
  <!--fin del navbar-->

  <!--header -->
  <div class="fondo d-flex justify-content-center align-items-center">
    <div class="col text-center">
      <div id="header">Sobre Nosotros
        <p id="subtext">Descubre qué hay detrás de la magia en tu jardín, conoce más acerca de Plantas Reyes</p>
      </div>
    </div>
  </div>
  <!--fin del header-->

  <!-- Encabezado 
<div id="sobreNosotros">
  <div class="misionVision d-flex justify-content-md-center" >
      <div class="border border-0 text-center"><br>
        <h1><b>Sobre Nosotros</b>
        </h1><br>
      </div>
    </div>
  </div>
</div>

  Final de Encabezado -->
  <!-- Inicio Mision y Vision -->
  <br><br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="card mb-3 border-0" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="contenedor-texto d-flex align-items-center col-md-8">
          <div class="card-body">
            <h1 class="titles card-title text-center">¿Quiénes somos?</h1>
            <h5 class="card-text text-center" id="parrafo">Plantas Reyes es un vivero ubicado en Cuajimalpa de Morelos que cuenta con 12 años en el mercado de horticultores y ofrece a sus clientes una amplia selección de plantas, flores y herramientas de jardinería de alta calidad.
            </h5>
          </div>
        </div>
        <div class="col-md-4 ">
          <img src="../assets/images/invernadero.jpg" class="img-fluid rounded-end"
            alt="Imagen regando las plantas en una ventana">
        </div>
      </div>
    </div>
  </div>
  </div>

  <br><br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="card mb-3 border-0" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../assets/images/Plantita .jpg" class="img-fluid rounded-start"
            alt="Imagen regando las plantas en una ventana">
        </div>
        <div class="contenedor-texto d-flex align-items-center col-md-8">
          <div class="card-body">
            <h1 class="titles card-title text-center">Misión</h1>
            <h5 class="card-text text-center" id="parrafo">Ofrecer a nuestros clientes una amplia selección de plantas y
              flores de
              alta calidad, brindando una experiencia de compra en línea conveniente y satisfactoria.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="card mb-3 border-0" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="contenedor-texto d-flex align-items-center col-md-8">
          <div class="card-body">
            <h1 class="titles card-title text-center">Visión</h1>
            <h5 class="card-text text-center" id="parrafo">Ser la tienda líder en el mercado de plantas y flores,
              reconocida por
              nuestra calidad excepcional, variedad de productos y excelente servicio al cliente. Aspiramos a ser la
              primera opción para aquellos que buscan embellecer su hogar u oficina con plantas naturales,
              proporcionando una experiencia de compra única y memorable.</h5>
          </div>
        </div>
        <div class="col-md-4">
          <img src="../assets/images/Plantita 2.jpg" class="img-fluid rounded-end"
            alt="Imagen regando las plantas en una ventana">
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Final Mision y Vision -->

  <!-- Inicio Valores -->
  <div class="container">
    <div class="col-12  text-center" id="titulos">
      <h1 id="valuesTitle">Valores </h1>
    </div>
  </div>

  <!-- FLIPING CARDS -->

  <div class="row mx-1 cards-grid">
    <div class="col">
      <div class="container" id="valuesContainer">
        <div class="card" id="valuesCard">
          <div class="front" style="background-image: url('https://images.unsplash.com/photo-1470058869958-2a77ade41c02?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); 
  background-size: cover; 
  background-position: center; 
  width: 100%; 
  height: 300px;">
          </div>


          <div class="back">
            <p id="texto">Nos comprometemos a ser abiertos y directos en todas nuestras actividades,
              brindando a nuestros clientes información clara y precisa sobre nuestros procesos, abastecimiento,
              precios y la calidad de nuestros productos</p>
          </div>
        </div>
        <h1 id="titulos" style="padding: 1rem;">Transparencia</h1>
      </div>
    </div>

    <div class="col">
      <div class="container" id="valuesContainer">
        <div class="card" id="valuesCard">
          <div class="front" style="background-image: url(https://media.istockphoto.com/id/1254709312/photo/green-business-meeting-united-partners-team-with-hands-together-holding-plant-green-trusted.jpg?s=612x612&w=0&k=20&c=PvuDbzmZDa21J5muok2Dn1uHlBzDfwFBL3xfpg53QQA=);"></div>
          <div class="back">
            <p id="texto">Crear un entorno de respeto y confianza con nuestros clientes para de esta
              forma garantizar un servicio de calidad y claridad donde exista la confianza de compartirnos su
              experiencia y sugerencias.</p>
          </div>
        </div>
        <h1 id="titulos" style="padding: 1rem;">Integridad</h1>
      </div>
    </div>

    <div class="col">
      <div class="container" id="valuesContainer">
        <div class="card" id="valuesCard">
          <div class="front" style="background-image: url(https://plus.unsplash.com/premium_photo-1677756430603-f081a25b0aa7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
         background-size: cover; 
  background-position: center; 
  width: 100%; 
  height: 300px;"></div>
          <div class="back">
            <p id="texto">Crear un entorno de respeto y confianza con nuestros clientes para de esta
              forma garantizar un servicio de calidad y claridad donde exista la confianza de compartirnos su
              experiencia y sugerencias.</p>
          </div>
        </div>
        <h1 id="titulos" style="padding: 1rem;">Variedad y Selección</h1>
      </div>
    </div>

    <div class="col">
      <div class="container" id="valuesContainer">
        <div class="card" id="valuesCard">
          <div class="front" style="background-image: url(https://media.istockphoto.com/id/1010894426/photo/concept-for-differentiate-from-other-leader-or-unique.jpg?s=1024x1024&w=is&k=20&c=0nt3kNm71heaDDhCCQBjV4lhOr8hWtaGwsKeCxvDfDY=);"></div>
          <div class="back">
            <p id="texto">Nos comprometemos a ofrecer productos de la más alta calidad a nuestros
              clientes. Seleccionamos cuidadosamente nuestras plantas y flores para garantizar su frescura y belleza,
              asegurando la satisfacción de nuestros clientes en cada compra.</p>
          </div>
        </div>
        <h1 id="titulos" style="padding: 1rem;">Calidad</h1>
      </div>
    </div>

    <div class="col">
      <div class="container" id="valuesContainer">
        <div class="card" id="valuesCard">
          <div class="front" style="background-image: url(https://images.unsplash.com/photo-1611735341450-74d61e660ad2?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);  background-size: cover; 
  background-position: center; 
  width: 100%; 
  height: 300px; "></div>
          <div class="back">
            <p id="texto">Creemos en el poder de las plantas para inspirar y mejorar nuestras vidas.
              Nos esforzamos por brindar a nuestros clientes información y recursos educativos que les permitan
              disfrutar y cuidar de sus plantas de manera óptima.</p>
          </div>
        </div>
        <h1 id="titulos" style="padding: 1rem;">Inspiración y educación</h1>
      </div>
    </div>

    <div class="col">
      <div class="container" id="valuesContainer">
        <div class="card" id="valuesCard">
          <div class="front" style="background-image: url(https://media.istockphoto.com/id/1317277176/photo/smiling-young-asian-couple-the-owners-of-small-business-flower-shop-discussing-over-laptop-on.jpg?s=612x612&w=0&k=20&c=9Yc2QZvt4AtDnc4-_syX_2ZsChb7ZuhQNkatqgn-jHM=);"></div>
          <div class="back">
            <p id="texto">Nos preocupamos por el medio ambiente y nos esforzamos por promover
              prácticas sostenibles en toda nuestra cadena de suministro. Trabajamos con proveedores comprometidos con
              la conservación de la naturaleza y la protección de los recursos naturales</p>
          </div>
        </div>
        <h1 id="titulos" style="padding: 1rem;">Sostenibilidad</h1>
      </div>
    </div>
    <!-- END FLIPPING CARDS -->

  </div>
  </div>
  <br><br><br>

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

    <script src="../js/carritoSpan.js" type="module"></script>
    <script src="../js/UserStatus.js"></script>
</body>

<!--___________________________________________FIN PIE DE PAGINA___________________________________________-->


</html>