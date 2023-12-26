<?php include 'nav/menu.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

body {
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(180deg, rgba(248, 154, 12, 0.00) 0%, #F89A0C 46.46%);
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif; /* Use Montserrat font */
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    overflow: hidden;
    width: 80%; /* Adjust the width for larger screens */
    max-width: 600px; /* Set a maximum width to ensure it doesn't get too wide */
    margin: 0 auto;
    padding: 40px;
}

.left-section {
    flex: 1;
    overflow: hidden;
}

.right-section {
    flex: 1;
    padding: 20px;
    text-align: center;
}

.login-form {
    display: flex;
    flex-direction: column;
}

.login-form label {
    margin-bottom: 8px;
}

.login-form input {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.login-form button {
    padding: 10px;
    background-color: #F89A0C;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.login-form button:hover {
    background-color: #F89A0C;
}

img {
    width: 100%;
    height: auto;
}

/* Media Queries */
@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
        width: 60%;
        max-width: none;
    }

    .right-section {
        padding: 20px;
    }
}
        
    </style>
    <title>Login</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="left-section">
            <img src="log/ico.png" alt="Imagen de fondo">
        </div>
        <div class="right-section">
            <h2>Login</h2>
            <form class="login-form" action="process_login.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar sesión</button>
        </form>
        </div>
    </div>
</body>
</html>
