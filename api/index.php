
<?php
// api/index.php
header('Content-Type: text/html; charset=UTF-8');
echo "<h1>Bienvenidos a Plantas Reyes</h1>";
?>

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
  <script src="js/catalogue-cards.js" type="module" async defer></script>
  <link rel="stylesheet" href="./styles/catalogo.css">
  <link rel="stylesheet" href="./styles/index.css">
 
  <link rel="stylesheet" href="./styles/Navbar.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <title>Pagina Principal</title>
</head>

<body>
<?php
// Primero, definimos los datos de conexión a la base de datos
$host = 'localhost';      // La dirección del servidor de la base de datos
$dbname = 'Plantas.Reyes.M';    // El nombre de la base de datos
$user = 'postgres';     // El usuario de la base de datos
$password = 'cucei'; // La contraseña del usuario

try {
    // Crear una conexión a la base de datos usando PDO (PHP Data Objects)
    $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $password);

    // Configuramos PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Definimos una consulta SQL para obtener los datos necesarios para el combobox
    $sql = "SELECT * FROM productos"; // Reemplaza 'tabla' por el nombre de la tabla y ajusta los campos según sea necesario

    // Preparamos la consulta SQL
    $stmt = $pdo->prepare($sql);

    // Ejecutamos la consulta
    $stmt->execute();

    // Iniciamos el combobox en HTML
    echo "<select name='mi_combobox'>";

    // Recorremos cada fila del resultado de la consulta
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Por cada fila, creamos una opción en el combobox
        // 'id' se usará como el valor de la opción y 'nombre' como el texto mostrado
        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
    }

    // Cerramos el combobox
    echo "</select>";

} catch (PDOException $e) {
    // Si ocurre un error en la conexión, mostramos un mensaje
    echo "Error en la conexión: " . $e->getMessage();
}

// Finalmente, cerramos la conexión asignando null a $pdo
$pdo = null;
?>


    <!--Inicio del NavBar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <img class="rounded-circle" src="./assets/images/logoNavbar.png" width="60rem" alt="Plantas Reyes" />
          <a class="title" href="./index.php">
            <h4>PLANTAS REYES</h4>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse font-navbar" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./pages/sobre-nosotros.php">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/catalogo.php">Catálogo de productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/pAM.php">Proyectos a medida</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/contactanos.php">Contáctanos</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="./pages/CarritoDeCompras.php">Carrito de compras</a>
              </li>
    
              <li class="nav-item">
              <li class="nav-item">
          <a class="nav-link" href="./pages/CarritoDeCompras.php" id="carritoIcon">
            <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" alt="iconoCarrito">
          </a>
        </li>
              </li>
              <li class="nav-item dropdown" id="Usuario-Estatus">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Iniciar sesión
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./pages/login.php">Ingresa a tu cuenta</a></li>
    
                  <li>
                    <a class="dropdown-item" href="./pages/signup.php">Regístrate</a>
                  </li>
    
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--Fin del NavBar-->

    <!-- Inicio Carrucel de Encabezado -->
    <div class="EncabezadoPI">
        <div class="h-100px;">
            <div id="EncabezadoPP" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">

                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div> -->

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="./assets/images/carruselPrincipal.jpg" class="d-block w-100" alt="Principal">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 id="titulos">Plantas Reyes</h1>
                            <h5 id="parrafoPI">Descubre un mundo verde de belleza natural en Plantas Reyes. 
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./assets/images/PlPlantas.png" class="d-block w-100" alt="Mantenimiento">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 id="titulos">Plantas y Macetas</h1>
                            <h5 id="parrafoPI">Convierte tu hogar en un oasis de serenidad y frescura con nuestras exquisitas selecciones de plantas y macetas. 
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./assets/images/carruselPrincipal1.jpg" class="d-block w-100" alt="ProyectosAMedida">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 id="titulos">Proyectos a la medida</h1>
                            <h5 id="parrafoPI">Déjate envolver por la belleza de la naturaleza y encuentra inspiración para dar vida a tus espacios en Plantas Reyes.
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"

                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button> -->

      </div>
    </div>
  </div>
  </div>
  <!-- Final Carrucel de Encabezado -->

  <!-- Inicio del Encabezado Tarjetas-->
  <div class="misionVision d-flex justify-content-md-center" id="titulo-encabezado-PI">
    <div class="col-md-12">
      <div class="border border-0 text-center" ><br>
      <h1 style="color: #4b2e1f;"><b>¡Productos destacados!</b></h1><br>
      </div>
    </div>
  </div>
  <br><br><br>
  <!-- Final del Encabezado Tarjetas-->
  <!-- Product cards-->
  <div class="row" id="container-cards">

    <div class="col-sm-12 container text-center">
      <!--<div class="container"></div>-->
    </div>
  </div>
  <!-- Inicio PAM-->
  <br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="col-md-10">
      <div class="rounded-pill text-center " id="titulo-pill"><br>
      <h1 style="color: #223b10;"><b>Transforma tu hogar con el toque mágico de la naturaleza. En Plantas Reyes, cultivamos belleza para cada rincón de tu vida."
      </b></h1><br>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="misionVision d-flex justify-content-md-center text-center">
  <div class="col-md-12">
    <div class="row g-3"> <!-- Se agrega un espaciado entre columnas -->
      
      <!-- Primera tarjeta -->
      <div class="col-md-4">
        <div class="card h-100 shadow" id="cont-t" style="background-color: #587742;">
          <div class="card-body">
            <h4 class="card-title" id="titulos" style="text-align: center; color: white;">En Plantas Reyes</h4>
            <p class="card-text" id="parrafo" style="text-align: justify; color: white;">
              Cultivamos más que plantas, cultivamos sueños verdes. Somos un vivero apasionado por la naturaleza, con raíces profundas en la dedicación, el compromiso y el amor por el medio ambiente.
              Desde nuestros inicios, hemos trabajado para ofrecer a nuestros clientes plantas de la más alta calidad, accesorios para jardinería y 
              una experiencia de compra enriquecedora. Aquí, creemos que cada planta tiene una historia, y nuestro propósito es ayudarte a contar la tuya.
            </p>
            <img src="https://images.unsplash.com/photo-1597868165956-03a6827955b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            class="img-fluid rounded-start" alt="entrega" id="icono" style="width: auto; height: auto;">

            <a href="./pages/contactanos.php" class="btn btn-light" id="contact-button">Contacto</a>
          </div>
        </div>
      </div>
      
      <!-- Segunda tarjeta -->
      <div class="col-md-4">
        <div class="card h-100 shadow" id="cont-t" style="background-color: #587742;">
          <div class="card-body">
            <h4 class="card-title" id="titulos" style="text-align: center; color: white;">¿Por qué elegirnos?</h4>
            <p class="card-text" id="parrafo" style="text-align: justify; color: white;">
              Calidad garantizada: Cada planta es seleccionada y cuidada con esmero para garantizar que llegue a ti en perfecto estado.
              <br>Simplicidad en cada compra: Navega, elige y recibe tus productos sin complicaciones, directamente en tu puerta.
             <br> Asesoramiento personalizado: ¿Tienes dudas sobre tus plantas? Nuestro equipo está aquí para guiarte.
            </p>
            <img src="https://images.unsplash.com/photo-1518335935020-cfd6580c1ab4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            class="img-fluid rounded-start" alt="entrega" id="icono" style="width: auto; height: auto;">
          </div>
        </div>
      </div>
      
      <!-- Tercera tarjeta -->
      <div class="col-md-4">
        <div class="card h-100 shadow" id="cont-t" style="background-color: #587742;">
          
          <div class="card-body">
            <h4 class="card-title" id="titulos" style="text-align: center; color: white;">Planta del Mes</h4>
            <p class="card-text" id="parrafo" style="text-align: justify; color: white;">
              Como se conoce en México, diciembre está lleno de nochebuenas para decorar nuestros hogares en vísperas de Navidad. Además de acompañarnos en estas fiestas, 
              es un regalo perfecto para brindar un ambiente acogedor con los seres queridos.
            </p>
            <img src="https://images.unsplash.com/photo-1661190111044-0f1c2258878f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            class="img-fluid rounded-start" alt="entrega" id="icono" style="width: auto; height: auto;">

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<br><br><br><br><br>

  <!--inicio footer
  <div id="footer" class="container-fluid">
    <div class="row p-5">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <img src="/assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem" height="100rem">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">

        <a href="/pages/sobre-nosotros.php">
          <p>Nosotros</p>
        </a>
        <a href="/pages/contactanos.php">
          <p>Contacto</p>
        </a>
        <img src="/assets/icons/facebook.png" alt="facebook" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">

        <p>Términos y condiciones</p>

        <p>Preguntas frecuentes</p>
        <img src="/assets/icons/instagram.png" alt="instagram" id="iconos-redes">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p>Aviso de privacidad</p>

        <p>Envios, pagos y devoluciones</p>
        <img src="/assets/icons/github.png" alt="github" id="iconos-redes">
      </div>
    </div>-->

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
        <a href="./pages/sobre-nosotros.php" style="text-decoration: none; color: #223b10;"><i class="bi bi-info-circle-fill"></i> Sobre Nosotros</a>
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

  </div>
  <script src="./js/carritoSpan.js" type="module"></script>
  <script src="./js/UserStatus.js"></script>
  <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->
</body>
</html>
