<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online - Componentes de PC</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <!-- Barra de navegación fija -->
    <div class="bg-dark text-white py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Nombre de la tienda -->
            <div class="fw-bold fs-4">
                <a href="#" class="text-white text-decoration-none">TiendaPC</a>
            </div>

            <!-- Teléfono y correo -->
            <div>
                <i class="fas fa-phone me-2"></i>+34 123 456 789
                <span class="mx-3">|</span>
                <i class="fas fa-envelope me-2"></i>soporte@tiendapc.com
            </div>

            <!-- Redes sociales -->
            <div>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Barra de navegación principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TiendaPC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-home me-1"></i>Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-desktop me-1"></i>Componentes</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-cogs me-1"></i>Servicios</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-cart-shopping me-1"></i>Carrito</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-user me-1"></i>Mi Cuenta</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
                </ul>

                <!-- Buscador -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
-->
