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
  <link rel="stylesheet" href="../styles/pAM.css">
  <link rel="stylesheet" href="../styles/Navbar.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <title>Proyectos a Medida</title>
</head>
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
  <title>Proyectos a Medida</title>
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

  <!--Inicio de Proyectos a Medida-->
  <div class="pam">
    <br>
    <div class="misionVision d-flex justify-content-md-center">
      <div class="card mb-3 border-0" style="max-width: 1000px;" id="pam-con">
        <div class="row g-0">
         <div class="front" style="background-image: url(https://images.unsplash.com/photo-1531058240690-006c446962d8?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
         background-size: cover;  width: 100%;  height: 500px; ">
          </div>
          <div class="col-md-2" id="pam-con"></div>

  <div class="card-body">
    <h1 class="titles card-title text-center" id="titulos">Proyectos a medida</h1>
    <br>
    <p class="card-text text-center" id="parrafo-pam">
                  ¡Siéntete mejor en tus espacios favoritos rodeado de plantas! <br>
                  Con Plantas Reyes, te ofrecemos asesoría especializada y propuestas personalizadas
                  para que puedas tener las plantas y macetas adecuadas en tus espacios más queridos.
    </p>
  </div>
</div>

        </div>
      </div>
    </div>
    <br>
  </div>
  <!-- Final de Proyectos a Medida-->

  <!-- Inicio de espacios para plantas-->
  <div class="misionVision d-flex justify-content-md-center" id="titulo-encabezado-Pam">
    <div class="col-md-12">
      <div class="border border-0 text-center"><br>
        <h1><b>¿Qué espacios se pueden ver más bonitos con plantas?</b>
        </h1><br>
      </div>
    </div>
  </div>
  <!-- Final de espacios para plantas-->
  <br><br>
  <!-- Inicio imagenes de espacios para plantas-->
  <div class="misionVision d-flex justify-content-md-center">

    <div class="col-12  text-center">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded" style="height:500px">
            <img src="https://images.unsplash.com/photo-1628258334105-2a0b3d6efee1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Plantas" style="height:425px;">
            <div class="card-body">
                <h5 class="card-title" id="titulos">Oficina</h5>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card shadow p-3 mb-5 bg-body rounded" style="height:500px">
            <img src="https://images.unsplash.com/photo-1587564621145-2c28a6a25ee7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Plantas" style="height:425px;">
              <div class="card-body">
                <h5 class="card-title" id="titulos">Hogar</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded " style="height:500px">
            <img src="https://images.unsplash.com/photo-1559842438-2942c907c8fe?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Plantas" style="height:425px;">
              <div class="card-body">
                <h5 class="card-title" id="titulos">Negocios</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- final imagenes de espacios para plantas-->
  <br>
  <div class="misionVision d-flex justify-content-md-center">
    <div class="col-md-10">
      <div class="rounded-pill text-center " id="titulo-pill"><br>
        <h1>¿Cómo se llevan a cabo los proyectos?
        </h1><br>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="misionVision d-flex justify-content-md-center text-center">
    <div class="col-md-10">
      <div class="row row-cols-1 row-cols-md-4 g-5">
        <div class="col rounded">
          <div class="card h-100 shadow" id="cont-t">
          <img src="https://i.pinimg.com/736x/e2/a4/fa/e2a4fa3412bd7664f1378c0d5ef3d38f.jpg"
            class="img-fluid rounded-start d-flex container d-flex justify-content-center" 
     alt="plantita" 
     id="icono" 
     style="width: 200px; height: 150px; object-fit: cover; margin-top: 12px;">
            <div class="card-body ">
              <h4 class="card-title" id="titulos">¡Contactanos!</h4>
              <p class="card-text " id="parrafo">Ya sea que prefieras comunicarte por WhatsApp o correo, estamos aquí
                para atenderte. Puedes agendar una visita a domicilio o recibir asesoría personalizada en línea.
                Estamos disponibles para responder todas tus preguntas y brindarte la orientación que necesitas para
                comenzar tu proyecto.</p>
              <a href="#" class="button-pam" id="titulos">Contacto</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
          <img src="https://images.unsplash.com/photo-1628199688008-c4bd24f493f0?q=80&w=1515&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
     class="img-fluid rounded-start d-flex container d-flex justify-content-center" 
     alt="plantita" 
     id="icono" 
     style="width: 200px; height: 150px; object-fit: cover; margin-top: 12px;">

            <div class="card-body">
            <h4 class="card-title" id="titulos">Nuestro Equipo</h4>
              <p class="card-text" id="parrafo">Con base en una asesoría en línea o una visita a domicilio, crearemos
                una propuesta personalizada para tu espacio.
                Nuestro equipo de expertos tomará en cuenta tus preferencias,   necesidades y 
                estilo para diseñar una
                solución única y adaptada a ti.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
            <img src="https://images.unsplash.com/photo-1490677739661-d3395897c0a7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="img-fluid rounded-start d-flex container d-flex justify-content-center" 
     alt="plantita" 
     id="icono" 
     style="width: 200px; height: 150px; object-fit: cover; margin-top:12px;">
            <div class="card-body">
            <h4 class="card-title" id="titulos">Asesoría gratis</h4>
              <p class="card-text" id="parrafo">Plantas Reyes se encargará de la instalación en tu hogar.
                <br>Nuestro equipo llevará a cabo la colocación de las plantas, <br> responderá todas tus preguntas dejando tus
                espacios limpios y listos para disfrutar.
                Nos aseguraremos de que todo esté perfectamente colocado y en armonía con tu entorno.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow" id="cont-t">
          <img src="https://images.unsplash.com/photo-1643730530591-ea80de0a79e4?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="img-fluid rounded-start d-flex container d-flex justify-content-center" 
     alt="plantita" 
     id="icono" 
     style="width: 200px; height: 150px; object-fit: cover; margin-top: 12px;">
            <div class="card-body">
            <h4 class="card-title" id="titulos">Cuidados</h4>
              <p class="card-text" id="parrafo">Cuando compres tus plantas con Plantas Reyes, recibirás una garantía
                mantenimiento gratuito.
                Queremos asegurarnos de que tus plantas se mantengan saludables y hermosas, brindándote el soporte
                necesario para su cuidado a largo plazo.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br><br>

  <br><br><br>
  <!-- Final contactanos!-->

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

</html>