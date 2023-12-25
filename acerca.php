<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita | Contacto</title>

    <style>
        /* Estilos para la imagen principal */
        .main-image {
            width: 100%;
            height: 550px;
            display: block;
        }


        /* Estilos para la sección de texto e imagen */
        .text-image-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .text-content {
            max-width: 60%;
        }

        .text-content p {
            text-align: justify;
        }

        .image-content {
            max-width: 35%;
        }

        .image-content img {
            width: 54%;
            height: auto;
            border-radius: 8px; /* Añade bordes redondeados a la imagen */
            display: block; /* Hace que la imagen sea un bloque para centrarla horizontalmente */
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }


                /* Estilos para la nueva sección */
                .mission-vision-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .mission-content,
        .vision-content {
            max-width: 48%; /* Cada sección ocupa el 48% del contenedor */
        }

        .mission-content h2,
        .vision-content h2,
        .mission-content p,
        .vision-content p {
            text-align: center; /* Centra el texto */
        }

        /* Estilos para la línea divisoria vertical */
        .divider {
            border-left: 5px solid #000000; /* Color y grosor de la línea */
            height: 100%; /* Ocupa toda la altura disponible */
            margin: 0 20px; /* Espaciado izquierdo y derecho */
        }

        .finish{
            padding: 20px;
        }

        .image-g {
            width: 30%;
            margin-left: auto;
            margin-right: auto;
        }

        /* Ajustes para pantallas más pequeñas */
        @media only screen and (max-width: 768px) {
            .main-image {
                height: auto;
            }

            .text-image-section {
                flex-direction: column;
            }

            .text-content,
            .image-content {
                max-width: 100%;
            }

            .mission-vision-section {
                flex-direction: column;
            }

            .mission-content,
            .vision-content {
                max-width: 100%;
            }

            .divider {
                display: none;
            }

            .finish {
                padding: 10px;
            }

            .image-g {
        width: 100%; /* Set the width to 100% for responsiveness */
        text-align: center; /* Center the image horizontally */
    }

    .image-g img {
        width: 80%; /* Set the image width to 80% of the container */
        height: auto; /* Maintain the aspect ratio */
        border-radius: 8px; /* Keep the border-radius */
        display: block; /* Center the image horizontally */
        margin: 0 auto; /* Center the image horizontally */
    }


        }


    </style>
</head>
<body>

    <!-- Imagen principal -->
    <img class="main-image" src="years/teh.png" alt="Descripción de la imagen">

    <!-- Sección de texto e imagen -->
    <div class="text-image-section">
        <div class="text-content">
            <p>Enclavada en el corazón de Tehuacán, Puebla, La Granjita se erige como una abastecedora de pollo comprometida con la excelencia en la producción y distribución de productos avícolas. Fundada en 1993, nos enorgullece ser una fuente confiable de frescura y calidad para la comunidad local y más allá.</p>
        </div>
        <div class="image-content">
            <img src="log/ico.png" alt="Descripción de la imagen">
        </div>
    </div>

    <!-- Nueva sección de Misión y Visión -->
    <div class="mission-vision-section">
        <!-- Misión -->
        <div class="mission-content">
            <h2>Misión</h2>
            <p>En La Granjita, nuestra misión es simple pero poderosa: brindar opciones saludables y deliciosas de pollo y productos avícolas a nuestros clientes. Nos esforzamos por ser la elección preferida, asegurando la frescura desde nuestra granja hasta tu mesa.</p>
        </div>

        <!-- Línea divisoria vertical -->
        <div class="divider"></div>

        <!-- Visión -->
        <div class="vision-content">
            <h2>Visión</h2>
            <p>Convertirnos en una empresa líder dentro de la cadena de suministros y llegar a ser la principal opción para el cliente, ofreciendo productos de la más alta calidad.</p>
        </div>
    </div>

    <div class="section1">
    <h2 align="center">Nuestra Comunidad</h2>
    </div>

    <div class="finish">
        <p align="center">Más que una abastecedora, La Granjita es parte integral de la comunidad. Participamos activamente en eventos locales y colaboramos con negocios de la zona para fortalecer la conexión con nuestros clientes.</p>
        <br>
        <p align="center">En La Granjita, no solo ofrecemos pollo; ofrecemos una experiencia de frescura, calidad y compromiso. ¡Descubre la diferencia de La Granjita en cada bocado!</p>
    </div>

    <div class="image-g">
            <img src="log/ico.png" alt="Descripción de la imagen">
        </div>


    <?php include 'footer.php'; ?>

</body>
</html>


