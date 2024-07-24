<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="icon" type="image/png" sizes="16x16" href=images/logo.png>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estyles_admin.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta de administrador?</h3>
                    <p>Inicia sesión para acceder al panel de administración</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta de administrador?</h3>
                    <p>entonces cuadre!</p>
                    
                </div>
            </div>

            <!--Formulario de Login y Registro-->
            <div class="contenedor__login-register">
                <!--Login Admin-->
                <form action="php/login_admin_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión (admin)</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>
                </form>

                <!--Register Admin-->
                <form action="php/registro_admin_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/script_admin.js"></script>
</body>
</html>
