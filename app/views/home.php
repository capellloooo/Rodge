<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Rodge</title>

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/stylesheet-hom.css">
        <link rel="stylesheet" href="css/stylesheet-log.css">
    </head>

    <body>

        <!-- TOP BAR -->
        <div class="top-bar">
            <button class="mi-cuenta"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#loginModal">
                <img src="Recursos/user.png" alt="Usuario">
                <span>Mi Cuenta</span>
            </button>
        </div>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navMenu"
                        aria-controls="navMenu"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">

                        <li class="nav-item"><a class="nav-link" href="#canchas">Canchas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#localizacion">Localización</a></li>
                        <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#resenas">Reseñas</a></li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- CANCHAS -->
        <section id="canchas" class="container my-5">

            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="Recursos/cancha1.svg" class="img-fluid rounded" alt="Cancha 1">
                </div>
                <div class="col-md-6">
                    <h3>Las piedras - cancha las gemelas - futbol 5</h3>
                    <p>Esta cancha está ubicada en las piedras y es ideal para jugar futbol 5, con pasto sintético.</p>
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="Recursos/cancha2.svg" class="img-fluid rounded" alt="Cancha 2">
                </div>
                <div class="col-md-6 order-md-1">
                    <h3>Las piedras - cancha las gemelas - futbol 5</h3>
                    <p>Esta cancha está ubicada en las piedras y es ideal para jugar futbol 5, con pasto sintético.</p>
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="Recursos/cancha3.svg" class="img-fluid rounded" alt="Cancha 3">
                </div>
                <div class="col-md-6">
                    <h3>Las piedras - cancha las gemelas - futbol 5</h3>
                    <p>Esta cancha está ubicada en las piedras y es ideal para jugar futbol 5, con pasto sintético.</p>
                </div>
            </div>

        </section>

        <!-- LOCALIZACIÓN -->
        <section id="localizacion" class="container my-5">

            <h1 class="text-center mb-4">Localización</h1>

            <div class="row g-4 align-items-start">

                <!-- MAPA FIXED -->
                <div class="col-lg-8">
                    <div class="mapa-box">
                        <iframe
                            src="https://www.google.com/maps?q=-34.7324307,-56.223592&z=17&output=embed"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- INFO -->
                <div class="col-lg-4">

                    <div class="info-box p-3 rounded shadow-sm">

                        <h3>Encuentra nuestras canchas</h3>

                        <p>
                            Aquí puedes ver la ubicación exacta de todas nuestras canchas disponibles.
                        </p>

                        <hr>

                        <h5><i class="bi bi-geo-alt-fill me-2"></i> Dirección</h5>
                        <p>Las Piedras, Canelones</p>

                        <h5><i class="bi bi-clock-fill me-2"></i> Horarios</h5>
                        <p>Lunes a Domingo: 08:00 - 23:00</p>

                        <h5><i class="bi bi-car-front-fill me-2"></i> Cómo llegar</h5>
                        <p>Usa el mapa o abre en Google Maps para rutas.</p>

                        <a href="https://www.google.com/maps/place/Canchas+Las+Gemelas/@-34.7324306,-56.2282054,17z"
                            target="_blank"
                            class="btn btn-success w-100 mt-2">
                            Abrir en Google Maps
                        </a>

                    </div>

                </div>

            </div>

            <!-- CERCANAS -->
            <div class="row mt-5 g-3">

                <div class="col-md-4">
                    <div class="card shadow-sm p-3 text-center">
                        <h5>Cancha Las Gemelas</h5>
                        <p>2.1 km de distancia</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm p-3 text-center">
                        <h5>Cancha Central</h5>
                        <p>3.5 km de distancia</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm p-3 text-center">
                        <h5>Cancha Norte</h5>
                        <p>5.2 km de distancia</p>
                    </div>
                </div>

            </div>

        </section>

        <!-- RESTO -->
        <section id="noticias">
            <h1>Noticias</h1>
            <p>Mantente informado sobre eventos, torneos y novedades deportivas.</p>
        </section>

        <section id="contacto">
            <h1>Contacto</h1>
            <p>Comunícate con nuestro equipo para consultas y soporte.</p>
        </section>

        <section id="resenas">
            <h1>Reseñas</h1>
            <p>Descubre las opiniones de nuestros usuarios y comparte tu experiencia.</p>
        </section>

        <!-- MODAL LOGIN -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Iniciar Sesión</h5>

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Cerrar">
                        </button>
                    </div>

                    <div class="modal-body">
                        <?php include 'login.php'; ?>
                    </div>

                </div>
            </div>
        </div>
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scroll.js"></script>

    </body>
</html>