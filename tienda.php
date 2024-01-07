<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda | La granjita</title>
    <style>
        body{
            background: linear-gradient(180deg, rgba(248, 154, 12, 0.00) 0%, #F89A0C 46.46%);
        }
        section {
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .container:hover {
    transform: scale(1.1); /* Puedes ajustar el valor según la cantidad de agrandamiento que deseas */
    transition: transform 0.3s ease; /* Añade una transición suave para una animación más agradable */
}


        .container {
            width: 30%;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 50px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }

        .img-pollo {
    max-width: 25%;
    height: auto;
    margin-bottom: 10px;
}

        /* Nueva sección con fondo de color #F89A0C */
        .colorful-section {
            background-color: #Fff;
            padding: 20px;
            text-align: justify; /* Agrega esta línea para justificar el texto */
        }

                /* Otra nueva sección con fondo de color diferente */
                .new-section {
                    background-color: #FFF;  /* Puedes cambiar el color según tus preferencias */
                    padding: 20px;
                    text-align: justify; /* Agrega esta línea para justificar el texto */
                    color: #000;  /* Texto en color blanco para mejor visibilidad */
                }

                /* Estilos para la imagen en la nueva sección */
 /* Estilos para la imagen en la nueva sección */
                .new-section img.custom-image {
                    max-width: 10%;  /* Ajusta el tamaño máximo según tus preferencias */
                    margin: auto;
                    display: block;
                }


                .your-new-section {
                    background-color: #ffffff; /* Color de fondo para tu nueva sección */
                    text-align: center; /* Alineación del texto al centro, puedes ajustar según sea necesario */
                    border: 1px solid #ddd; /* Borde para tu nueva sección */
                }


                        /* Estilos adicionales para hacer la sección más responsiva */
                        @media screen and (max-width: 768px) {
            .container {
                width: 100%; /* Cambia el ancho a 100% en pantallas más pequeñas */
            }
        }

        @media screen and (max-width: 600px) {
            h1 {
                font-size: 24px; /* Ajusta el tamaño de la fuente del encabezado principal en pantallas más pequeñas */
            }

            .new-section img.custom-image {
                    max-width: 40%;  /* Ajusta el tamaño máximo según tus preferencias */
                    margin: auto;
                    display: block;
                }
        }

    </style>
</head>
<body>


    <h1>Nuestros Productos</h1>

    <section>
    <?php
$productos = array(
    "Pollo Fresco Entero\nCorte tipo rosticero, entero y eviscerado\n(sin patas, ni cabeza ni pescuezo). O entero eviscerado para pequeño comercio (con patas, cabeza y pescuezo).",
    "Pollo Fresco en Piezas\nPierna y muslo\nPechuga\nAla natural\nHuacal\nRabadilla\nPata/Pescuezo",
    "Pedidos Especiales\nFiletes de Pechuga o pierna/muslo x corte y gramaje especial\nFajitas de Pollo\nCubos de Pechuga\nMolida de Pollo",
    "Marinados de Pollo\nMuslos (chile-limón)\nAlitas sin punta (artesanal, BBQ, chipotle, chile-limón, fuego)\nFajitas (jalapeño)",
    "Empanizados de Pollo\nTenders (natural, búfalo, coronel, jalapeño)\nNuggets (redondo tradicional, dinosaurio, estrella) Palomitas y Hamburguesas",
    "Congelados\nPapas a la francesa\n(corte recto delgado y ondulado)\nPapas Gajo\nFiletes de tilapia"
);

$h2_titles = array(
    "Pollo Fresco Entero",
    "Pollo Fresco en Piezas",
    "Pedidos Especiales",
    "Marinados de Pollo",
    "Empanizados de Pollo",
    "Congelados"
);

$images = array(
    "icon/pollo-asado.png",
    "icon/alitas-de-pollo.png",
    "icon/pechuga-de-pollo.png",
    "icon/pierna-de-pollo.png",
    "icon/pollo-frito.png",
    "icon/pollo.png",
);

for ($i = 0; $i < count($productos); $i++) {
    echo '<div class="container">';
    echo '<img class="img-pollo" src="' . $images[$i] . '" alt="Product Image">';
    echo '<h2>' . $h2_titles[$i] . '</h2>';
    echo '<p>' . nl2br($productos[$i]) . '</p>';
    echo '</div>';
}
?>

    </section>

    <!-- Nueva sección con fondo de color #F89A0C -->
    <div class="colorful-section">
        <h2 align="center">Descubre Nuestra Variedad de Pollo Fresco</h2>
        <p>En "La granjita", nos enorgullece ofrecer pollo fresco de la más alta calidad, disponible para todos: desde pequeños negocios hasta el consumidor personal. Nuestro compromiso es brindarte productos frescos y deliciosos, con garantía de calidad.</p>

        <h3>¿Por qué elegir nuestro pollo fresco?</h3>
        <ul>
            <li><strong>Calidad Superior:</strong> Seleccionamos cuidadosamente cada pieza para garantizar la frescura y el sabor excepcional.</li>
            <li><strong>Origen Confiable:</strong> Trabajamos con proveedores de confianza para asegurarnos de que nuestro pollo provenga de fuentes confiables y éticas.</li>
            <li><strong>Variedad de Cortes:</strong> Desde cortes tipo rosticero hasta piezas individuales, ofrecemos una amplia variedad para satisfacer todas tus necesidades culinarias.</li>
            <li><strong>Atención Personalizada:</strong> Nuestro equipo está comprometido a brindarte un servicio excepcional y asesoramiento personalizado.</li>
        </ul>

        <p>Ya sea que tengas un negocio o simplemente estés buscando ingredientes frescos para tus comidas en casa, ¡descubre la diferencia que hace "La granjita" en cada bocado!</p>
    </div>

    <!-- Otra nueva sección con fondo de color diferente y nueva información -->
    <div class="new-section">
        <h2 align="center">Calidad & Confianza en Pedidos de Mayoreo</h2>
        <p>En la producción y procesado de pedidos de mayoreo, mantenemos los más altos estándares de calidad y confianza. Todos nuestros productos están elaborados en base a estrictos protocolos de higiene e inocuidad, lo que garantiza un producto de máxima calidad y frescura.</p>
        <p>Acércate con nosotros y sé parte de nuestros clientes y aliados comerciales.</p>
        <img class="custom-image" src="icon/insignia.png" alt="Imagen de Calidad y Confianza"> <!-- Agrega la ruta correcta y el nombre de tu imagen -->
    </div>

<!-- Nueva sección que puedes personalizar según tus necesidades -->
<div class="your-new-section">
<?php include 'footer.php'; ?>

</div>

</body>

</html>

