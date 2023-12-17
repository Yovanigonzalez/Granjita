<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita | Contacto</title>

    <style>
        /* Estilos para la imagen */
        img {
            width: 100%; /* La imagen ocupará el 100% del ancho del contenedor */
            /*max-width: 600px; /* Establece un ancho máximo para la imagen */
            height: auto; /* Mantiene la proporción de aspecto original de la imagen */
            display: block; /* Elimina cualquier espacio adicional alrededor de la imagen */
            /*margin: 0 auto; /* Centra la imagen horizontalmente dentro del contenedor */
        }

        /* Estilos para el SVG */
        svg {
            width: 100%;
            height: auto;
            margin: 0;
            margin-top: -87px;
        }
    </style>
</head>
<body>

    <!-- Aquí puedes agregar la etiqueta img con la ruta de tu imagen -->
    <img src="ci/tehuacan.jpg" alt="Descripción de la imagen">

    <!-- Agrega el código SVG directamente dentro de la imagen -->
    <img src="data:image/svg+xml;utf8,<?php echo rawurlencode('<svg xmlns="http://www.w3.org/2000/svg" width="900" height="111" viewBox="0 0 900 111" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L37.5 11.5625C75 23.125 150 46.25 225 60.125C300 74 375 78.625 450 76.3125C525 74 600 64.75 675 55.5C750 46.25 825 37 862.5 32.375L900 27.75V111H862.5C825 111 750 111 675 111C600 111 525 111 450 111C375 111 300 111 225 111C150 111 75 111 37.5 111H0V0Z" fill="#F89A0C"/></svg>'); ?>" alt="Descripción del SVG">

</body>
</html>
