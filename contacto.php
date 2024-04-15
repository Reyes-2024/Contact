<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faysal Financial Group</title>
    <!-- CSS de Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Agrega Font Awesome en tu head si no lo has hecho -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="Logo" style="width:20%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav move-left-10 center-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.html">QUIÉNES SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PERSONAS <i class="fas fa-chevron-right"></i></a>
                        <ul class="submenu">
                            <li><a href="/personas/pensiones.html">Pensiones</a></li>
                            <li><a href="/personas/seguros.html">Seguros</a></li>
                            <li><a href="/personas/finanzas.html">Finanzas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="empresas.html">EMPRESAS<i class="fas fa-chevron-right"></i></a>
                        <ul class="submenu">
                            <li><a href="/empresas/segurosFinaConta.html">Servicios financieros y contables</a></li>
                            <li><a href="/empresas/segurosEmpre.html">Seguros empresariales</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">NUESTROS CLIENTES OPINAN </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="contact-section">
        <div class="container-form">
            <div class="box-info">
                <h1>CONTÁCTATE CON NOSOTROS</h1>
                <div class="data">
                    <p><i class="fa-solid fa-phone"></i> +52 1 55 9168 8141</p>
                    <p><i class="fa-solid fa-envelope"></i> contacto@faysalgroup.mx</p>
                    <p><i class="fa-solid fa-location-dot"></i> Av. Insurgentes Sur No. 64,
                        Col. Juárez, Cuauhtémoc, C.P. 06600
                        CDMX</p>
                </div>
                <div class="links">
                    <a href="https://api.whatsapp.com/send?phone=5591688141"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="mailto:contacto@faysalgroup.mx"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
            <form action="enviar_correo.php" method="post">
                <div class="input-box">
                    <input type="text" name="nombre" placeholder="Nombre y apellido" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" required placeholder="Correo electrónico">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="telefono" placeholder="Teléfono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-box">
                    <textarea name="asunto" placeholder="En que podemos ayudarte..."  rows="4"></textarea>
                </div>
                <button type="submit">Enviar mensaje</button>
            </form>
        </div>
    </section>



    <script src="js/script.js"></script>
    <!-- jQuery (necesario para Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JS de Bootstrap (opcional, solo si usas componentes que requieren JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Otros scripts, como Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




</body>

</html>