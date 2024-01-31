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
      flex-wrap: wrap;
      width: 80%;
      padding: 20px;
      margin: auto;
      border-radius: 10px;
    }

    .video {
      flex: 1;
      border-radius: 10px;
      overflow: hidden;
    }

    .video video {
      width: 30%;
      height: auto;
      border-radius: 10px;
    }


    @media (max-width: 768px) {
      .contenedor4 {
        padding: 10px;
        flex-direction: column-reverse;
      }

      .video {
        flex: 1 100%;
      }

      .video video {
        width: 100%; /* Make the video take up the full width on smaller screens */
        height: auto; /* Maintain the video's aspect ratio */
      }
    }
  </style>
</head>
<body>

  <div class="contenedor4">
    <div class="video">
      <video controls>
        <source src="views/video1.mp4" type="video/mp4">
        Video 1
      </video>
    </div>
    <div class="texto">
      <h2>LA GRANJITA</h2>
      <p align="justify">Ya sea que estés buscando pechugas sin hueso, muslos jugosos o alas crujientes, en La Granjita encontrarás una amplia variedad de cortes de pollo fresco que se adaptan a todos los gustos y preferencias culinarias. También ofrecemos opciones de pollo orgánico y sin hormonas para aquellos que buscan una opción aún más saludable.</p>
    <br>
    <p align="justify">En La Granjita, nos esforzamos por brindar un servicio personalizado a cada cliente. Nuestro personal experto está listo para ayudarte a elegir los cortes perfectos de pollo para tu próxima comida. Además, ofrecemos consejos de cocina y recetas deliciosas para que saques el máximo provecho de nuestros productos.</p>
    </div>
  </div>

</body>
</html>
