<?php include 'includes/header.php'; ?>
<?php include 'includes/slider.php'; ?>

<main class="container-fluid">
    <!-- Sección de Categorías de Productos -->
    <section class="category-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Explora nuestras categorías</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <img src="https://example.com/images/procesadores.jpg" class="img-fluid" alt="Procesadores">
                        <h4 class="mt-3">Procesadores</h4>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <img src="https://example.com/images/gpus.jpg" class="img-fluid" alt="Tarjetas gráficas">
                        <h4 class="mt-3">Tarjetas Gráficas</h4>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <img src="https://example.com/images/ram.jpg" class="img-fluid" alt="Memorias RAM">
                        <h4 class="mt-3">Memoria RAM</h4>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <img src="https://example.com/images/almacenamiento.jpg" class="img-fluid" alt="Almacenamiento">
                        <h4 class="mt-3">Almacenamiento</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="featured-products py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Productos Destacados</h2>
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://example.com/images/procesador.jpg" class="card-img-top" alt="Procesador AMD Ryzen">
                        <div class="card-body">
                            <h5 class="card-title">Procesador AMD Ryzen 7 5800X</h5>
                            <p class="card-text">Ideal para gaming y multitarea, 8 núcleos y 16 hilos.</p>
                            <p class="price">$450.00</p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://example.com/images/ram.jpg" class="card-img-top" alt="Memoria RAM Corsair Vengeance">
                        <div class="card-body">
                            <h5 class="card-title">Memoria RAM Corsair Vengeance 16GB</h5>
                            <p class="card-text">Alta velocidad para tareas exigentes y juegos.</p>
                            <p class="price">$100.00</p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://example.com/images/ssd.jpg" class="card-img-top" alt="SSD Samsung 970 EVO">
                        <div class="card-body">
                            <h5 class="card-title">SSD Samsung 970 EVO 1TB</h5>
                            <p class="card-text">Velocidad de lectura y escritura rápida para mejorar el rendimiento.</p>
                            <p class="price">$120.00</p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://example.com/images/gpu.jpg" class="card-img-top" alt="Tarjeta Gráfica NVIDIA RTX 3070">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta Gráfica NVIDIA RTX 3070</h5>
                            <p class="card-text">Rendimiento gráfico de última generación para gaming en 4K.</p>
                            <p class="price">$650.00</p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section class="testimonials py-5">
        <div class="container text-center">
            <h2 class="mb-4">Lo que dicen nuestros clientes</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">“Excelente experiencia de compra. Los componentes llegaron rápido y funcionan perfectamente. ¡Muy satisfecho!”</p>
                        <p class="testimonial-author">Carlos M.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">“Muy buena atención al cliente. Me ayudaron a elegir los productos ideales para mi PC de gaming.”</p>
                        <p class="testimonial-author">Laura G.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">“¡Todo perfecto! Los productos están de excelente calidad y el envío fue rápido.”</p>
                        <p class="testimonial-author">Javier R.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banners Promocionales -->
    <section class="promo-banners py-5">
        <div class="container text-center">
            <h2 class="mb-4">Ofertas Especiales</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="promo-banner">
                        <img src="https://example.com/images/promo-banner1.jpg" class="img-fluid" alt="Oferta procesadores">
                        <p class="promo-text">¡Descuentos en procesadores de alto rendimiento!</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="promo-banner">
                        <img src="https://example.com/images/promo-banner2.jpg" class="img-fluid" alt="Oferta tarjetas gráficas">
                        <p class="promo-text">¡Ofertas increíbles en tarjetas gráficas para gaming!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>





