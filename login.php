<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
        }

        .left {
            flex: 1;
            padding: 20px;
        }

        .right {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Add any additional styling you may need */

    </style>
</head>
<body>

    <div class="container">
        <div class="left">
            <!-- Puedes cambiar 'ruta_de_la_imagen' por la ruta real de tu imagen -->
            <img src="log/ico.png" alt="Imagen de registro" style="width: 100%;">
        </div>
        <div class="right">
            <!-- Aquí puedes agregar tu formulario de registro -->
            <form action="procesar_registro.php" method="post">
                <!-- Tus campos del formulario van aquí -->
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <!-- Otros campos del formulario -->
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>

</body>
</html>
