<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../styles/NavbarAdmin.css" rel="stylesheet">
    <link href="../styles/admin2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@200&display=swap" rel="stylesheet">

    <title>Admin</title>


    <integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!--Inicio de Navbar-->
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid" id="navbar-container">
            <img class="rounded-circle" id="pr" src="../assets/images/logoNavbar.png" width="60rem"
                alt="Plantas Reyes" />
            <a class="title" id="pr" href="linpagina inicial">
                <h4 id="TituloPR">PLANTAS REYES</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="pr"></span>
            </button>

            <div class="collapse navbar-collapse font-navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./sobre-nosotros.php">Sobre nosotros</a>
                    </li>
                    <li class="nav-item" id="pr">
                        <a class="nav-link" href="./catalogo.php">Catálogo de productos</a>
                    </li>
                    <li class="nav-item" id="pr">
                        <a class="nav-link" href="./pAM.php">Proyectos a medida</a>
                    </li>
                    <li class="nav-item" id="pr">
                        <a class="nav-link" href="./contactanos.php">Contáctanos</a>
                    </li>
                    <li class="nav-item" id="pr">
                        <a class="nav-link" href="./CarritoDeCompras">Carrito de compras</a>
                    </li>

                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link m-0" href="./link carrito" id="carritoIcon">
                            <img src="../assets/icons/iconoCarrito.png" id="iconoCarrito" id="pr" alt="iconoCarrito">
                        </a>
                    </li>
                    </li>

                    <li class="nav-item dropdown" id="Usuario-Estatus">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Iniciar Sesión
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./link ingresa a tu cuenta">Ingresa a tu cuenta</a></li>

                            <li>
                                <a class="dropdown-item" href="./link registrate">Regístrate</a>
                            </li>

                        </ul>
                    </li>

            </div>
        </div>
    </nav>
    <!--Fin de Navbar-->
    <!--Inicio de Admin-->
    <div class="container-fluir" id="admin">

        <div class="col-12  text-center">
            <div class="container">
                <div class="row">
                    <div class="card-group">
                        <div class="card card-text-align-center  border border-0">
                            <img src="../assets/images/logo.png" id="foto" class="card-img-top" alt="logo plantas reyes">
                            <div class="card-body" id="cuerpo">

                            </div>
                        </div>
                        <div class="card border border-0">
                            <div class="card-body" id="cuerpo">
                                <h2 class="nombre" id="titulos">NOMBRE</h2>
                                <p class="card-text" id="texto">ISAAC</p>
                                <h2 class="apellido" id="titulos">APELLIDO</h2>
                                <p class="card-text" id="texto">CAMPOS ROSAS</p>
                            </div>
                        </div>
                        <div class="card border border-0">
                            <div class="card-body" id="cuerpo">
                                <h2 class="correo" id="titulos">CORREO</h2>
                                <p class="card-text" id="texto">gigi69333@gmail.com</p>
                                <h4 class="apellido" id="titulos">Usuario</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="division">

                <!-- ************************************************************************************ -->
                <!-- Inicio de cards -->
                <div class="container-fluid m-0" id="opciones">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card border border-0" id="cardabajo">
                                <div class="card-body">
                                    <h5 class="card-title">MIS PEDIDOS</h5>
                                    <p class="card-text" id="cardabajo">Ver estatus de pesdidos</p>
                                    <a href="#" id="button" class="btn btn-primary">Estatus</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border border-0">
                                <div class="card-body">
                                    <h5 class="card-title">CATALOGO DE PRODUCTOS</h5>
                                    <p class="card-text-align-center" id="cardabajo">Ver catalogo de productos.</p>
                                    <a href="./EdicionCatalogo.php" id="button" class="btn btn-primary">Ir</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border border-0">
                                <div class="card-body">
                                    <h5 class="card-title">CREAR PUBLICACIÓN</h5>
                                    <p class="card-text" id="cardabajo">Crear publicaciones en tu pagina como
                                        administrador</p>
                                        <button id="button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin de cards -->
            </div>
        </div>
    </div>
    <!--Fin de Admin-->
    <div></div>
    <!--___________________________________________INICIO PIE DE PAGINA___________________________________________-->
    <div id="footer" class="container-fluid">
        <div class="row p-5">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="/assets/icons/Plantas_reyes_LOGOS-09.png" alt="PlantasReyes" width="100rem" height="100rem">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p>Nosotros</p>
                <p>Contacto</p>
                <img src="/assets/icons/facebook.png" alt="facebook" id="iconos-redes">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p>Términos y condiciones</p>
                <p>Preguntas frecuentes</p>
                <img src="/assets/icons/instagram.png" alt="instagram" id="iconos-redes">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p>Aviso de privacidad</p>
                <p>Envíos, pagos y devoluciones</p>
                <img src="/assets/icons/github.png" alt="github" id="iconos-redes">
            </div>
        </div>

    </div>

    <!--___________________________________________FIN PIE DE PAGINA___________________________________________-->
<!-- Inicia el modal (Formulario de nuevos productos) -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Inicia cabeza de modal -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Termina cabeza de modal -->

            <!-- Inicia cuerpo de modal -->
            <div class="modal-body conainter-fluid">
                <form class="needs-validation" id="productForm" novalidate>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div row></div>
                            <div class="col-md-12">
                                <img src="../assets/images/default-image-create-form.jpeg" class="img-fluid rounded"
                                    alt="Imagen de muestra" id="articleImage">
                            </div>
                            <div class="col-md-12">
                                <label for="imageForm" id="btn-image">Cargar imagen</label>
                                <input type="file" name="Imagen" class="form-control" aria-label="file example"
                                    id="imageForm" accept="image/*" required>
                                <div class="valid-feedback">
                                    ¡Genial!
                                </div>
                                <div class="invalid-feedback">
                                    Carga la imagen del artículo
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <label for="article" class="form-label">Nombre del artículo</label>
                                    <input type="text" class="form-control" name="Artículo" id="article"
                                        placeholder="Artículo" required>
                                    <div class="valid-feedback">
                                        ¡Genial!
                                    </div>
                                    <div class="invalid-feedback">
                                        Es necesario colocar el nombre del artículo
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="articleId" class="form-label">ID del artículo</label>
                                    <input type="number" class="form-control" name="ID" id="articleId" min="0"
                                        placeholder="4321" required>
                                    <div class="valid-feedback">
                                        ¡Genial!
                                    </div>
                                    <div class="invalid-feedback">
                                        Es necesario colocar el ID del artículo
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="articlePrice" class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="Precio" id="articlePrice"
                                        min="0" placeholder="123" step="0.01" required>
                                    <div class="valid-feedback">
                                        ¡Genial!
                                    </div>
                                    <div class="invalid-feedback">
                                        Es necesario colocar el precio del artículo
                                    </div>
                                </div>
                                <div class="mb-12">
                                    <label for="articleDescription" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="articleDescription" rows="5"
                                        placeholder="Descripción del producto" name="Descripción"
                                        required></textarea>
                                    <div class="valid-feedback">
                                        ¡Genial!
                                    </div>
                                    <div class="invalid-feedback">
                                        Es necesario colocar la descripción del artículo
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inicia pie del modal -->
                        <div class="modal-footer justify-content-right">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Termina pie de modal -->
                    </div>
                </form>
            </div>
            <!-- Termina cuerpo de modal -->



        </div>
    </div>
    <!-- Termina el modal (Formulario de nuevos productos) -->
    <script src="../js/uploadImage.js"></script>
        <script src="../js/validateData.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
        <script src="/js/UserStatus.js"></script>
</body>

</html>