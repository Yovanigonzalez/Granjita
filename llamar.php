<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenedor Dividido</title>
    <style>
        /* Estilo para el contenedor principal */
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Estilo para el contenedor interno (izquierda y derecha) */
        .contenedor-interno {
    display: flex;
    margin-top: -265px;
}

        /* Estilo para la parte izquierda (imagen) */
        .izquierda {
            flex: 1;
            text-align: center;
            padding: 20px;
            align-items: center;
        }

        /* Estilo para la parte derecha (información) */
        .derecha {
            flex: 2;
            padding: 20px;
        }

        /* Asegúrate de ajustar el ancho y la altura de la imagen según tus necesidades */
        .izquierda img {
            max-width: 100%; /* Ajusta según tus necesidades */
            max-height: 100%; /* Ajusta según tus necesidades */
            display: inline-block; /* Asegura que la imagen se comporte como un bloque en línea */
        }

                /* Media query para dispositivos pequeños */
                @media (max-width: 600px) {
            .contenedor-interno {
                margin-top: 0; /* Elimina el margen superior en dispositivos pequeños */
                flex-direction: column-reverse;
            }

            .izquierda img {
                max-width: 85%; /* Hace la imagen responsiva en dispositivos pequeños */
            }
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <div class="contenedor-interno">
            <div class="izquierda">
                <img src="img/marcar.png" alt="Imagen de marca">
            </div>
            <div class="derecha">
                <h2>¡Contáctanos!</h2>
                <p>Puedes contactarnos para realizar pedidos de productos o para obtener información sobre oportunidades de trabajo.</p>
                <p>Teléfono: <a href="tel: 2383838793" style="color: #000;">2383838793</a></p>
        <p>WhatsApp: <a href="https://wa.me/2384088922?text=Hola%20La%20Granjita,%20quiero%20obtener%20información" style="color: #000;"><i class="bi bi-whatsapp"></i> 2384088922</a></p>        <!--<p>Correo Electrónico: info@lagranjita.com.mx</p>-->        <!--<p>Correo Electrónico: info@lagranjita.com.mx</p>-->        <!--<p>Correo Electrónico: info@lagranjita.com.mx</p>-->
            </div>
        </div>
    </div>

</body>
</html>
