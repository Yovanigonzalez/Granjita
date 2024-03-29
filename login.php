<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Iniciar Sesión</title>

<style>
    body {
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(180deg, rgba(145, 29, 29, 0.00) 0%, #F89A0C 41.6%);
}


form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    display: none; /* Inicialmente oculto */
}

form.active {
    display: block; /* Muestra el formulario activo */
    margin: auto;
    margin-top: 60px;
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #fff;
    border-radius: 50px;
    background: #949d9a45;
}

button {
    background-color: #F89A0C;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #F89A0C;
}

p {
    text-align: center;
    margin-top: 10px;
}

/* Styles for images with specific IDs */
#loginImage, #registerImage {
    display: block; /* Make the image a block element to center it */
    margin: 0 auto; /* Auto margin horizontally centers the block element (image) */
    width: 50%;
    max-width: 200px;
    margin-bottom: 20px;
}

/* Media query para pantallas más pequeñas */
@media screen and (max-width: 600px) {
form {
max-width: 75%;
}

#loginImage, #registerImage {
width: 50%;
}

input {
font-size: 14px;
}

button {
font-size: 16px;
}
}

</style>
    <style>
    .mensaje {
        padding: 10px;
        border: 1px solid #fff;
        margin: 10px 0;
        font-size: 16px;
    }

    .success {
        background-color: #d4edda;
        color: #155724;
        border-radius: 20px;
    }

    .error {
        background-color: #f8d7da;
        color: #721c24;
        border-radius: 20px;

    }

    .info {
        background-color: #d1ecf1;
        color: #0c5460;
        border-radius: 20px;

    }
</style>


</head>
<body>

<!-- Dentro del formulario de inicio de sesión -->
<form id="loginForm" class="active" action="validar_inicio_sesion.php" method="post">
<?php
// Verificar si hay mensajes en la URL
if (isset($_GET['status']) && isset($_GET['message'])) {
    $status = $_GET['status'];
    $message = $_GET['message'];

    // Mostrar el mensaje en tu página, por ejemplo:
    echo '<div class="mensaje ' . $status . '">' . $message . '</div>';
}
?>

        <!-- Agrega una etiqueta de imagen con el atributo src que apunta a tu archivo de imagen -->
    <img src="log/ico.png" alt="Imagen de inicio de sesión" id="loginImage">
    <h2>Iniciar Sesión</h2>
    <label for="loginUsername">Correo:</label>
    <input type="text" id="loginUsername" name="loginUsername" required>

    <label for="loginPassword">Contraseña:</label>
    <input type="password" id="loginPassword" name="loginPassword" required>

    <button type="submit">Iniciar Sesión</button>
    <!--<p>¿Aún no tienes cuenta? <a href="#" onclick="toggleForm('registerForm')">Regístrate</a></p>-->
</form>



<!-- Dentro del formulario de registro -->
<form id="registerForm" action="registrar_usuario.php" method="post">
    <!-- Agrega una etiqueta de imagen con el atributo src que apunta a tu archivo de imagen -->
    <img src="ico/logo.png" alt="Imagen de registro" id="registerImage">
    <h2>Registrarse</h2>

    <label for="registerUsername">Usuario:</label>
    <input type="text" id="registerUsername" name="registerUsername" required>

    <!-- Nuevo campo de teléfono -->
    <label for="registerPhone">Teléfono:</label>
    <input type="tel" id="registerPhone" name="registerPhone" required>

    <!-- Nuevo campo de correo -->
    <label for="registerEmail">Correo:</label>
    <input type="email" id="registerEmail" name="registerEmail" required>

    <label for="registerPassword">Contraseña:</label>
    <input type="password" id="registerPassword" name="registerPassword" required>

    <button type="submit" onclick="validateRegistration()">Registrarse</button>
    <p>¿Ya tienes cuenta? <a href="#" onclick="toggleForm('loginForm')">Inicia Sesión</a></p>
</form>


<script>
    function toggleForm(formId) {
        document.getElementById('loginForm').classList.toggle('active');
        document.getElementById('registerForm').classList.toggle('active');
    }

    function validateRegistration() {
        // Agrega tu lógica de validación aquí
        var username = document.getElementById('registerUsername').value;
        var phone = document.getElementById('registerPhone').value;
        var email = document.getElementById('registerEmail').value;
        var password = document.getElementById('registerPassword').value;

        // Realiza comprobaciones de validación (por ejemplo, verifica si los campos no están vacíos, cumplen con los requisitos de longitud, etc.)
        // También puedes usar expresiones regulares para validación más avanzada.

        // Ejemplo: Verifica si el correo tiene un formato válido
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, ingresa una dirección de correo válida.");
            return false; // Evitar el envío del formulario
        }

        // Agrega más comprobaciones de validación según sea necesario

        // Si todo es válido, el formulario se enviará
    }
</script>



    <script>
        function toggleForm(formId) {
            document.getElementById('loginForm').classList.toggle('active');
            document.getElementById('registerForm').classList.toggle('active');
        }
    </script>

</body>
</html>
