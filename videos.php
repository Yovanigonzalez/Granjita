<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo de Video y Texto</title>
  <style>
    body {
      height: 100vh;
      margin: 0;
    }

    .contenedor4 {
      display: flex;
      width: 80%;
      padding: 40px;
    }

    .video {
      flex: 1;
      border-radius: 10px;
    }

    .texto {
      flex: 1;
      padding: 20px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>

  <div class="contenedor4">
    <div class="video">
      <iframe width="100%" height="315" src="views/video1.mp4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="texto">
      <h2>La Granjita</h2>
      <p>Este es un ejemplo de un texto a la derecha del video. Puedes personalizar el contenido aquí.</p>
    </div>
  </div>

</body>
</html>
