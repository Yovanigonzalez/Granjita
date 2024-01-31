<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto e Imagen</title>
    <style>
        

/* Estilo para el contenedor principal */
.custom-container {
    display: flex;
    flex-direction: column; /* Cambia a dirección de columna en pantallas pequeñas */
    padding: 20px;
}

/* Estilo para la sección de texto */
.custom-text,
.custom-image {
    width: 100%; /* Ancho completo en pantallas pequeñas */
    padding-right: 0; /* Elimina el espaciado derecho en pantallas pequeñas */
}

/* Estilo para la imagen (ajusta según sea necesario) */
.custom-image img {
    max-width: 65%; /* Ajusta el ancho máximo según el contenedor */
}

/* Media queries para pantallas más pequeñas (móviles) */
@media only screen and (min-width: 600px) {
    .custom-container {
        flex-direction: row; /* Vuelve a la dirección de fila en pantallas más grandes */
        
    }

    .custom-text,
    .custom-image {
        width: 50%; /* Ancho del 50% en pantallas más grandes */
    }

    .custom-text {
        padding-right: 20px; /* Agrega espaciado derecho en pantallas más grandes */
    }
}

    </style>
</head>

<body>

<div class="custom-container">
    <div class="custom-text">
        <h2 align="center">ABASTECEDORA LA GRANJITA</h2>
        <p align="justify">Más que una abastecedora, La Granjita es parte integral de la comunidad. Participamos activamente en eventos locales y colaboramos con negocios de la zona para fortalecer la conexión con nuestros clientes.

        En La Granjita, no solo ofrecemos pollo; ofrecemos una experiencia de frescura, calidad y compromiso. ¡Descubre la diferencia de La Granjita en cada bocado!</p>

        <p align="justify">Además, nos enorgullece presentar nuevos productos y ofertas especiales regularmente. Estamos comprometidos con la satisfacción de nuestros clientes y trabajamos arduamente para mejorar continuamente.</p>

        <p align="justify">Nuestro equipo en La Granjita está formado por apasionados amantes de la gastronomía, expertos en asegurar que cada producto que ofrecemos cumple con los más altos estándares de calidad. Valoramos la transparencia en nuestros procesos y te invitamos a conocer más sobre el viaje de nuestros productos desde la granja hasta tu mesa.</p>
    </div>
    <div class="custom-image">
        <img src="granjita/GR.png" alt="Abastecedora">
    </div>
</div>



    <div class="custom-container">
        <div class="custom-image">
            <img src="granjita/1.jpg" alt="Atencion">
        </div>
        <div class="custom-text">
            <h2 align="center">La Granjita</h2>
            <p align="justify">¡Descubre el fascinante mundo tras bambalinas de nuestra distribuidora de pollo, donde la frescura y calidad son la esencia de nuestro compromiso contigo!

            En el corazón de nuestra operación, cada día comienza con un dedicado equipo de expertos que seleccionan minuciosamente los pollos más jugosos y saludables, directamente de los mejores criaderos locales. Nos enorgullece decir que cada ave que llega a nuestras instalaciones es tratada con el máximo respeto y cuidado, garantizando que solo lo mejor llegue a tu mesa.

            Nuestra cadena de suministro está diseñada para brindarte no solo pollo, sino una experiencia gastronómica que despierta los sentidos. Desde el meticuloso proceso de corte, donde cada pieza es hábilmente preparada por manos expertas, hasta el cuidadoso empaque que preserva la frescura hasta llegar a tu hogar o negocio, cada paso es una obra maestra de calidad y eficiencia.

            Pero no nos detenemos ahí. Nos esforzamos por ir más allá de tus expectativas, ofreciendo un servicio al cliente excepcional. Nuestro equipo está siempre listo para responder tus preguntas, asesorarte en las mejores opciones y asegurarse de que tu experiencia con nosotros sea tan satisfactoria como el delicioso pollo que te ofrecemos.

            En nuestra distribuidora, no solo vendemos pollo; entregamos confianza, sabor y frescura en cada pedazo. Descubre la diferencia que hace nuestro compromiso inquebrantable con la calidad. ¡Bienvenido a la distribuidora de pollo donde cada día es una celebración de sabores irresistibles y momentos inolvidables!</p>
        </div>
    </div>


    
    <div class="custom-container">
        <div class="custom-text">
            <h2 align="center">Nuestro equipo de trabajo</h2>
            <p align="justify">En "La Abastecedora La Granjita", el equipo de trabajo se destacó por su eficiencia y colaboración durante una temporada de alta demanda de pollo. El equipo estaba compuesto por diferentes roles, como los encargados de la recepción de los productos avícolas, los que se encargaban de la preparación y empaque, y los encargados de la distribución.

            Durante esta temporada, se implementó una estrategia de planificación meticulosa para asegurar que la cadena de suministro estuviera bien coordinada. El equipo de recepción trabajó estrechamente con los proveedores para garantizar entregas oportunas de pollo fresco y de alta calidad. Además, se establecieron protocolos de calidad para garantizar que cada producto cumpliera con los estándares de la abastecedora.

            El equipo de preparación y empaque colaboró de manera eficiente para procesar grandes cantidades de pollo de manera rápida y precisa. Se implementaron medidas para optimizar los procesos y minimizar los desperdicios, lo que contribuyó a una producción más sostenible y rentable.
 
            </p>
        </div>
        <div class="custom-image">
            <img src="granjita/3.jpg" alt="Equipo">
        </div>
    </div>

</body>

</html>



