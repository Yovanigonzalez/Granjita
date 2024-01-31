<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio</title>
    <style>
        /* Añade estilos según sea necesario */
        .mi-contenedor {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .mi-contenedor .icono {
            flex: 1;
            text-align: center;
        }

        .mi-contenedor .horario {
            flex: 1;
            color: red; /* Cambia el color del texto a rojo */
        }

        /* Estilo adicional para el ícono */
        .mi-contenedor .icono lord-icon {
            width: 250px;
            height: 250px;
        }

        /* Media query para pantallas más pequeñas */
        @media (max-width: 767px) {
            .mi-contenedor {
                flex-direction: column-reverse; /* Cambia la dirección del contenedor a columna */
            }

            .mi-contenedor .icono,
            .mi-contenedor .horario {
                flex: 1; /* Ocupa todo el ancho disponible en pantallas más pequeñas */
                margin-bottom: 10px; /* Añade un margen inferior entre los elementos */
                text-align: left; /* Alinea el texto a la izquierda */
            }
        }
    </style>
</head>
<body>

<div class="mi-contenedor">
    <div class="icono">
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
        <lord-icon
            src="https://cdn.lordicon.com/wsdieofl.json"
            trigger="loop-on-hover"
            delay="1000">
        </lord-icon>
    </div>
    <div class="horario" id="horario">
        <h2>Horario de Atención</h2>
        <p><strong>Lunes a Sábado:</strong> 8:00 am - 6:00 pm</p>
        <p><strong>Domingo:</strong> 8:00 am - 4:00 pm</p>
        <p id="estado"></p>
        <script>
            // Obtiene el día actual
            var diaActual = new Date().getDay();
            // Obtiene la hora actual del sistema
            var horaActual = new Date().getHours();

            // Define el horario de atención
            var horarioInicio = 8;
            var horarioFinSabado = 18;
            var horarioFinDomingo = 16;

            // Muestra el horario siempre
            var horarioMensaje = 'Horario: Lunes a Sábado: 8:00 am - 6:00 pm, Domingo: 8:00 am - 4:00 pm';

            // Compara el día actual y la hora actual con el horario de atención
            if ((diaActual >= 1 && diaActual <= 6 && horaActual >= horarioInicio && horaActual < horarioFinSabado) ||
                (diaActual === 0 && horaActual >= horarioInicio && horaActual < horarioFinDomingo)) {
                document.getElementById('estado').textContent = 'Abierto';
                document.querySelector('.horario').style.color = 'black'; // Cambia el color del texto a negro si está abierto
            } else {
                document.getElementById('estado').textContent = 'Por el momento el establecimiento de la Abastecedora la Granjita se encuentra Cerrado';
            }
        </script>
    </div>
</div>

</body>
</html>
