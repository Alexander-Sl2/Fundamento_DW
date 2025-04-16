<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online - Carousel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
</head>
<body>

<!-- Sección Carousel -->
<section class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fw-bold">¡Bienvenido a TiendaPC!</h5>
                    <p>Encuentra los mejores componentes de PC y accesorios a precios competitivos.</p>
                    <a href="#" class="btn btn-warning btn-lg">Compra Ahora</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/02/03/08/35/banner-1176684_1280.jpg" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fw-bold">Descuentos Exclusivos</h5>
                    <p>¡No te pierdas nuestras ofertas especiales en componentes y PCs de alta gama!</p>
                    <a href="#" class="btn btn-warning btn-lg">Ver Ofertas</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fw-bold">Arma tu PC</h5>
                    <p>Elige tus componentes y crea la PC de tus sueños con nuestros productos de calidad.</p>
                    <a href="#" class="btn btn-warning btn-lg">Ver Componentes</a>
                </div>
            </div>

        </div>

        <!-- Controles del carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
