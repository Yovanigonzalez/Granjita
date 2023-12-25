<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localízanos</title>
    <style>

        section {
            display: flex;
            flex-wrap: wrap; /* Permite que los elementos se envuelvan en pantallas pequeñas */
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .left-column {
            flex: 1;
            padding-right: 20px;
            max-width: 100%; /* Ajusta el ancho máximo en pantallas pequeñas */
        }

        .right-column {
            flex: 1;
            max-width: 100%; /* Ajusta el ancho máximo en pantallas pequeñas */
            margin-top: 20px; /* Añade espacio entre las columnas en pantallas pequeñas */
            padding: 20px;
        }

        .map-container {
            position: relative;
            width: 100%;
            padding-bottom: 75%;
        }

        .map {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 96%;
            border: 10px solid #F89A0C;
            border-radius: 10px;
        }

        .info-text {
            margin-bottom: 20px;
        }

        .info-image {
            max-width: 65%; /* Ajusta el ancho máximo de la imagen */
            height: auto;
            border-radius: 10px;
            margin: 0 auto;
            display: block;
        }

        /* Consulta de medios para pantallas más pequeñas */
        @media only screen and (max-width: 768px) {
            .left-column, .right-column {
                flex: 100%; /* Hace que ambas columnas ocupen el ancho completo */
                max-width: 100%; /* Ajusta el ancho máximo en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>

    <section>
        <div class="left-column">
            <h1 align="center">Localízanos</h1>
            <p class="info-text">Utilizamos tecnología de Google para poder brindarte el mejor servicio. Con esta tecnología, te ayudamos a localizarnos fácilmente.</p>
            <img class="info-image" src="years/google-maps-logo.png" alt="Descripción de la imagen">
        </div>

        <div class="right-column">
            <div class="map-container">
                <iframe
                    class="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15138.20817277442!2d-97.3873572!3d18.4586373!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bcdbb2629395%3A0x1b15fbd31a214a66!2sAbastecedora%20de%20Pollo%20La%20Granjita!5e0!3m2!1ses-419!2smx!4v1703192196234!5m2!1ses-419!2smx"
                    width="600" height="450"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

</body>
</html>
