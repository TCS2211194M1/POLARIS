<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polaris - Gestión de Proyectos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/e.css"> <!-- Enlace a tu nuevo archivo CSS -->
</head>
<body>
<header class="header">
    <div class="container">
        <h1 class="logo">POLARIS</h1>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link"><i class="material-icons">home</i> Inicio</a></li>
                <li class="nav__item"><a href="estadoTarea.php" class="nav__link"><i class="material-icons">assignment</i> Estado de la Tarea</a></li>
                <li class="nav__item"><a href="#acerca" class="nav__link"><i class="material-icons">info</i> Acerca de</a></li>
                <li class="nav__item"><a href="#contacto" class="nav__link"><i class="material-icons">chat</i> Chat</a></li>
                <li class="nav__item"><a href="#" class="nav__link"><i class="material-icons">exit_to_app</i> Cerrar Sesión</a></li>
            </ul>
        </nav>
    </div>
</header>


    <section id="home" class="section section--home">
        <div class="container">
            <h2 class="section__title">¡Bienvenido a Polaris!</h2>
            <p class="section__description">¡Descubre una nueva era en la gestión de proyectos!</p>
            <p class="section__description">Con Polaris, llevar tus proyectos al siguiente nivel nunca fue tan fácil y emocionante. Nuestra plataforma te ofrece herramientas poderosas y una experiencia intuitiva para que puedas gestionar tus proyectos de manera eficiente y organizada.</p>
            <button class="btn btn--primary">¡Empieza ahora!</button>
        </div>
    </section>


    <section id="proyectos" class="section section--proyectos">
    <div class="container">
        <h2 class="section__title">Nuestros Proyectos</h2>
        <div class="swiper-container swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/tecnologia2.jpg" alt="Proyecto 1">
                    <div class="text-overlay">
                        <h3>Proyecto 1</h3>
                        <p>Tecnología</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="image/finanzas2.jpg" alt="Proyecto 2">
                    <div class="text-overlay">
                        <h3>Proyecto 2</h3>
                        <p>Gestión y Finanzas</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="image/ventas4.jpg" alt="Proyecto 3">
                    <div class="text-overlay">
                        <h3>Proyecto 3</h3>
                        <p>Ventas</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="image/produccion.jpg" alt="Proyecto 4">
                    <div class="text-overlay">
                        <h3>Proyecto 4</h3>
                        <p>Producción y Operación</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button"></div>
            <div class="swiper-button-next swiper-button"></div>
        </div>
    </div>
</section>


    <section id="acerca" class="section section--acerca">
        <div class="container">
            <h2 class="section__title">Acerca de Polaris</h2>
            <p class="section__description">Polaris es una plataforma de gestión de proyectos diseñada para ayudarte a llevar tus proyectos al siguiente nivel. Nuestro enfoque intuitivo y nuestras poderosas herramientas te permitirán trabajar de manera más inteligente y eficiente.</p>
        </div>
    </section>

    <section id="contacto" class="section section--contacto">
        <div class="container">
            <h2 class="section__title">Contacto</h2>
            <p class="section__description">¿Listo para comenzar a usar Polaris o tienes alguna pregunta? ¡No dudes en ponerte en contacto con nosotros!</p>
            <form action="#" class="contact-form">
                <input type="text" class="contact-form__input" placeholder="Nombre">
                <input type="email" class="contact-form__input" placeholder="Correo electrónico">
                <textarea class="contact-form__textarea" placeholder="Mensaje"></textarea>
                <button class="btn btn--primary">Enviar</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p class="footer__copyright">&copy; 2024 Polaris - Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
