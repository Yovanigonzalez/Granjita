<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Granjita</title>
  <style>
    body {
      text-align: center;
      margin: 0;
    }

    .contenedor {
      display: flex;
      justify-content: center;
      align-items: center;
      /*padding: 20px;*/
      margin: 0;
    }

    .imagen {
      max-width: 500px; /* Ajusta el tamaño máximo según tus necesidades */
    }

    .texto {
      max-width: 500px; /* Ajusta el ancho máximo según tus necesidades */
      margin-left: 20px; /* Espacio entre la imagen y el texto */
    }

    h4 {
      color: #000;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      margin: 0; /* Agregado para eliminar el margen predeterminado del h4 */
    }


    button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 20px;
      background-color: #F89A0C;
      border: 10px solid #F89A0C;
      color: #FFF; /* Color blanco para el texto del botón */
      cursor: pointer;
      border-radius: 10px;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-style: normal;
      line-height: normal;
    }


    svg {
      width: 100%;
      height: auto;
      margin: 0;
      margin-top: -87px;
    }

    .carousel-container {
      display: flex;
      align-items: center;
      /*justify-content: space-between;*/
      margin-top: 20px;
    }

    .carousel-item {
      width: 48%; /* Ajusta el ancho según tus necesidades */
      /*border: 1px solid #ccc; /* Ajusta el estilo del borde según tus necesidades */
      border-radius: 10px;
      overflow: hidden;
    }

    .carousel-item img {
      max-width: 85%;
      height: auto;
    }

    .carousel-item-content {
      padding: 20px;
      box-sizing: border-box;
      /*text-align: left;*/ /* Alinea el texto a la izquierda */
    }


    .circle {
  width: 183px; /* Ajusta el tamaño del círculo según tus necesidades */
  height: 183px; /* Ajusta el tamaño del círculo según tus necesidades */
  background-color: white; /* Color de fondo del círculo */
  border-radius: 50%; /* Hace que el elemento sea un círculo */
  margin: 0 auto; /* Centra el círculo horizontalmente */
  overflow: hidden; /* Asegura que la imagen se ajuste al círculo */
  position: relative; /* Establece una posición relativa para el contenedor */
}

.centered-image {
  position: absolute; /* Establece una posición absoluta para la imagen */
  top: 50%; /* Coloca la imagen en la mitad superior del círculo */
  left: 50%; /* Coloca la imagen en la mitad izquierda del círculo */
  transform: translate(-50%, -50%); /* Centra la imagen en el círculo */
  width: 100%; /* Ajusta el tamaño de la imagen para llenar el círculo */
  height: auto; /* Mantiene la proporción original de la imagen */
}

.product-title {
  color: #FFF;
  text-align: center;
  font-family: 'Montserrat Alternates', sans-serif;
  font-size: 25px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
}


.product-description {
  color: #FFF;
  text-align: center;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
}

/* Después del bloque SVG */
.especiales-header {
  text-align: left;
  margin-left: 20px; /* Puedes ajustar este valor según sea necesario para darle espacio desde el borde izquierdo */
}

    /* Otros estilos existentes */

    .section-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    .text-section {
      flex: 1;
      text-align: left;
    }

    .image-section {
      flex: 1;
      text-align: center;
    }

    .circle {
      width: 200px; /* Ajusta el tamaño del círculo según tus necesidades */
      height: 200px; /* Ajusta el tamaño del círculo según tus necesidades */
      background: linear-gradient(180deg, rgba(248, 154, 12, 0.22) 0%, rgba(248, 154, 12, 0.52) 100%);
      border-radius: 272px; /* Ajusta el radio del borde según tus necesidades */
      overflow: hidden; /* Asegura que la imagen se ajuste al círculo */
      position: relative; /* Establece una posición relativa para el contenedor */
    }
    
    .centered-image {
      position: absolute; /* Establece una posición absoluta para la imagen */
      top: 50%; /* Coloca la imagen en la mitad superior del círculo */
      left: 50%; /* Coloca la imagen en la mitad izquierda del círculo */
      transform: translate(-50%, -50%); /* Centra la imagen en el círculo */
      width: 100%; /* Ajusta el tamaño de la imagen para llenar el círculo */
      height: auto; /* Mantiene la proporción original de la imagen */
    }

    .text-section-title {
      font-size: 24px;
      font-weight: bold;
    }

    .image-section-title {
      font-size: 24px;
      font-weight: bold;
    }

    .text-section-title {
      color: #000;
      text-align: justify;
      font-family: 'Montserrat', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
    }

    .text-section li {
      color: #000;
      text-align: justify;
      font-family: 'Montserrat', sans-serif;
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
    }


    #special-section {
      background: #F89A0C;
      color: #FFF;
      padding: 1px;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
    }

    #special-section h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px; /* Adjust spacing between heading and sections */
    }

    .section-container {
      display: flex;
      /*justify-content: center; /* Center the sections horizontally */
      align-items: center;
      flex-wrap: wrap; /* Allow the sections to wrap on smaller screens */
    }

    .section-left,
    .section-right {
      flex: 1;
      text-align: left;
      max-width: 400px;
      margin: 0 20px; /* Add margin for spacing between sections */
    }

    .section-image {
      display: block; /* Ensure the image is a block-level element */
      margin: 0 auto; /* Center the image horizontally */
      max-width: 25%; /* Ensure the image doesn't exceed the container width */
      height: auto; /* Maintain aspect ratio */
      margin-bottom: 20px; /* Adjust spacing between text and image */
    }
  </style>

  <style>
    /* Estilos para la nueva sección "Únete a Nuestra Red de Distribución" */
#join-distribution-right {
  flex: 1;
  text-align: right;
  max-width: 459px; /* Puedes ajustar el ancho máximo según tus necesidades */
  margin: 0 20px; /* Agrega margen para el espacio entre secciones */
}

#join-distribution-right h2 {
  color: #000; /* Cambia el color del título según tus preferencias */
  font-family: 'Montserrat', sans-serif;
  font-size: 24px; /* Ajusta el tamaño del título */
  font-weight: bold;
  margin-bottom: 10px; /* Ajusta el espacio entre el título y el párrafo */
}

#join-distribution-right p {
  color: #000; /* Cambia el color del párrafo según tus preferencias */
  font-family: 'Montserrat', sans-serif;
  font-size: 17px; /* Ajusta el tamaño del párrafo */
  font-weight: 500;
  line-height: normal;
}
  </style>

<!-- Estilos de Movil-->

  <style>
            @media only screen and (max-width: 600px) {
            /* Estilos para pantallas más pequeñas (ej. teléfonos) */

            .contenedor {
                flex-direction: column;
            }

            .imagen {
                max-width: 100%; /* Hace que la imagen sea 100% del ancho del contenedor */
            }

            .texto {
                margin-top: 20px; /* Agrega espacio entre la imagen y el texto en pantallas pequeñas */
            }

            .carousel-container {
                flex-direction: column;
            }

            .carousel-item {
                width: 100%;
            }

            .carousel-item img {
                max-width: 100%;
            }
          }
  </style>
</head>
<body>

  <div class="contenedor">
    <img class="imagen" src="log/ico.png" alt="Logo de Distribuidora">
    <div class="texto">
      <h1>ABASTECEDORA<br> LA 'GRANJITA' </h1>
      <h4>La Granjita es una abastecedora de pollo comprometida con brindar productos avícolas frescos y de primera calidad. Ubicados en el corazón de Tehuacán, Puebla, nos esforzamos por ofrecer a nuestros clientes opciones saludables y deliciosas de pollo y productos avícolas.</h4>
      <button>Conocer más</button>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" width="900" height="300" viewBox="0 0 900 300" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L75 9.28571C150 18.5714 300 37.1429 450 37.1429C600 37.1429 750 18.5714 825 9.28571L900 0V542H825C750 542 600 542 450 542C300 542 150 542 75 542H0V0Z" fill="#F89A0C"/>

<!-- Carrusel -->
<foreignObject x="50" y="50" width="800" height="442">
  <div xmlns="http://www.w3.org/1999/xhtml" class="carousel-container">

    <div class="carousel-item">
      <!-- Círculo blanco con imagen -->
      <div class="circle">
        <img src="img/pierna.png" alt="Imagen 1" class="centered-image">
      </div>
    </div>
    
    <div class="carousel-item">
      <div class="carousel-item-content">
        <label class="product-title">Pierna</label><br><br>
        <h4 class="product-description">Nuestras piernas de pollo se seleccionan cuidadosamente para garantizar la máxima calidad. Criadas de manera responsable, sin hormonas ni antibióticos, ofrecemos un producto natural y nutritivo para tu mesa.</h4>
      </div>
    </div>

  </div>
</foreignObject>


<!-- Texto "Productos" -->
<text x="80%" y="40" font-size="20" fill="white"   font-weight="bold"
 font-family="'Montserrat', sans-serif">Productos</text>

  </svg>

  <br><br>
  <!-- Después del bloque SVG -->
  <h1 class="especiales-header">Lo que nos hace especiales:</h1>

  <!-- Nueva sección de texto -->
  <div class="section-container">
    <div class="text-section">
      <h2 class="text-section-title">En La Granjita, no solo proporcionamos productos avícolas de alta calidad; también somos:</h2>
      <ul>
        <br><br>
        <li><strong>Granja Sostenible:</strong> Cultivamos nuestros valores en cada rincón de la granja. Descubre cómo hacemos la diferencia para el planeta.</li>
        <br>
        <li><strong>Recetas Inspiradoras:</strong> Sumérgete en nuestro mundo culinario. Explora recetas que transformarán tus comidas con la frescura de La Granjita.</li>
      </ul>
    </div>

    <!-- Nueva sección de imagen -->
    <div class="image-section">
      <div class="circle">
        <img src="img/a.png" alt="Imagen Circular" class="centered-image">
      </div>
    </div>
  </div>


  <!-- Nueva sección con fondo de color -->
<div id="special-section">
  <h2>¿Por qué elegirnos como tu proveedor de confianza?</h2>
  <div class="section-container">
    <div class="section-left">
      <p>Entregas Rápidas y Confiables: 
        Nuestra red de distribución eficiente garantiza que recibas tus productos frescos de La Granjita en tiempo récord.</p>
        <img src="store/logistica.png" alt="Left Image" class="section-image">
    </div>
    <div class="section-right">
      <p>Atención al Cliente de Primera: 
        Nos enorgullece ofrecer un servicio al cliente excepcional. Estamos siempre disponibles para resolver tus consultas y asegurarnos de que obtengas lo que necesitas.
      </p>
      <img src="store/atencion.png" alt="Right Image" class="section-image">
    </div>
  </div>
</div>

<!-- Nueva sección "Únete a Nuestra Red de Distribución" -->
<div id="join-distribution" class="section-container">
  <div id="join-distribution-left"> <!-- Cambiado a "join-distribution-left" -->
  </div>
  <div id="join-distribution-right"> <!-- Cambiado a "join-distribution-right" -->
    <h2 class="text-section-title">Únete a Nuestra Red de Distribución</h2>
  </div>
</div>

</body>
</html>








