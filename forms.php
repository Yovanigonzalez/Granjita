<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Imagen</title>
  <style>
    body {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }

    .formulario-container {
      display: flex;
      justify-content: space-between;
      width: 80%;
    }

    .formulario-columna {
      width: 48%;
    }

    .formulario-columna label,
    .formulario-columna select,
    .formulario-columna input,
    .formulario-columna textarea {
      width: 100%;
      margin-bottom: 10px;
    }

    .imagen-container {
      width: 20%;
    }

    img {
      width: 100%;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="formulario-container">
    <div class="formulario-columna">
      <h2>Formulario</h2>
      <form action="#" method="post">
        <!-- Primeras filas del formulario -->

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telefono">Teléfono móvil:</label>
        <input type="tel" id="telefono" name="telefono" required><br>

        <!-- Segundas filas del formulario -->
        
        <label for="nombreNegocio">Nombre de tu Negocio:</label>
        <input type="text" id="nombreNegocio" name="nombreNegocio" required><br>

        <label for="direccionNegocio">Dirección de tu Negocio:</label>
        <input type="text" id="direccionNegocio" name="direccionNegocio" required><br>

        <label for="tipoNegocio">Tu negocio es:</label>
        <select id="tipoNegocio" name="tipoNegocio" required>
          <!-- opciones... -->
        </select><br>

      </div>

      <div class="formulario-columna">
        <!-- Terceras filas del formulario -->

        <label for="producto">Producto requerido:</label>
        <select id="producto" name="producto" required>
          <!-- opciones... -->
        </select><br>

        <label for="mensaje">Escribe tu Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>

        <button type="submit">Enviar</button>
      </form>
    </div>

    <div class="imagen-container">
      <img src="icon/lista-de-verificacion.png" alt="Imagen de ejemplo">
    </div>
  </div>
</body>
</html>
