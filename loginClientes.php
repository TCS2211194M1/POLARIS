<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesLoginC.css">
    <title>Login Clientes</title>
</head>
<body>

<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Crear Usuario</h1><br>
                <span>¡Únete ahora!</span><br>

                <input type="text" placeholder="Ingresa tu Nombre" />
                <input type="text" placeholder="Ingresa tus Apellidos" />
                <input type="email" placeholder="Ingresa tu Email" />
                <input type="password" placeholder="Ingresa tu Contraseña" />
                <input type="password" placeholder="Confirmar Contraseña" />
                <input type="text" placeholder="Ingresa tu Nombre de Usuario" />
                <input type="text" placeholder="Ingresa tu Organización" />
                <input type="text" placeholder="Ingresa la clave" />
                <input type="text" placeholder="Ingresa tu Teléfono" />
                <input type="text" placeholder="Ingresa tu Pais" /><br>
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Iniciar Sesión</h1><br>
                <span>Prepárate para la acción: inicia sesión ahora</span><br>

                <input type="" placeholder="Ingresa tu Organización" />
                <input type="" placeholder="Ingresa tu Usuario" />
                <input type="" placeholder="Ingresa tu Contraseña" />
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Iniciar Sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Para mantenernos conectados, por favor inicia sesión con tu información personal</p>
                    <button class="ghost" id="signIn">Volver</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Únete y descubre</h1>
                    <p>Inicia tu viaje con nosotros proporcionando tus detalles personales.</p>
                    <button class="ghost" id="signUp">Registrate</button>
                </div>
            </div>
        </div>
    </div>

<script src="js/script.js"></script>
</body>
</html>
