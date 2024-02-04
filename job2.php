<?php
include 'nav/menu.php';

include 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $vacante = $_POST['vacante'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $experiencia = $_POST['experiencia'];
    $educacion = $_POST['educacion'];
    $habilidades = $_POST['habilidades'];
    $referencias = $_POST['referencias'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO solicitudes_empleo (vacante, nombre, direccion, telefono, correo, experiencia, educacion, habilidades, referencias)
            VALUES ('$vacante', '$nombre', '$direccion', '$telefono', '$correo', '$experiencia', '$educacion', '$habilidades', '$referencias')";

    if ($conn->query($sql) === TRUE) {
        echo "Solicitud enviada exitosamente";
    } else {
        echo "Error al enviar la solicitud: " . $conn->error;
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/job.css">
    <style>
        body {
            text-align: center;
            margin: 20px;
        }

        h1, h2, p {
            color: #333;
        }

        .oportunidades {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .vacante {
            background-color: #fff;
            border: 5px solid #F89A0C;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            text-align: left;
            max-width: 300px;
            height: 240px;
            position: relative;
        }

        .postulate-button {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px;
            background-color: #F89A0C;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        body {
            margin: 0; /* Elimina el margen predeterminado del body */
        }

        .mi-seccion {
            background-color: #F89A0C;
            padding: 20px;
            color: #ffffff;
            margin: 0; /* Elimina el margen interno de la sección */
        }

        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 50px;
            text-align: left;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            color: #000;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container button {
            padding: 10px;
            background-color: #F89A0C;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Estilos para el elemento SVG */
        svg {
            width: 100%; /* 100% del ancho de la ventana visible */
            height: auto; /* Para mantener la proporción de aspecto */
            display: block; /* Asegura que el SVG no tenga márgenes internos */
            margin-top: -18px;
        }

        .obtener {
            padding: 20px;
        }

        .job {
            padding: 20px;
        }

        /* Estilos para el elemento SVG en dispositivos más pequeños */
        @media (max-width: 600px) {
            svg {
                height: auto;
                display: block;
                margin-top: -14px;
                width: 100%;
            }
        }
    </style>
    <title>Granjita | Bolsa de trabajo</title>
</head>
<body>

<h1>Bolsa de Trabajo <br> "La Granjita"</h1>

<div class="job">
    <p align="justify">La Granjita, abastecedora de pollo, está buscando personas apasionadas y comprometidas para unirse a nuestro equipo. Consulta a continuación para obtener más información sobre las oportunidades de trabajo.</p>
</div>

<h2>Oportunidades de Trabajo</h2>

    <?php
    // Conexión a la base de datos
    include 'config/config.php';

    // Obtén datos sobre empleos desde la base de datos
    $consulta = "SELECT id, titulo, subtitulo FROM trabajos";
    $resultado = $conn->query($consulta);

    // Verifica si la consulta fue exitosa
    if ($resultado) {
        // Obtiene un array asociativo
        if ($resultado->num_rows > 0) {
            // Obtiene la primera oportunidad de trabajo
            $fila = $resultado->fetch_assoc();
            $id = $fila['id'];
            $titulo = $fila['titulo'];

                    // Genera dinámicamente el HTML para cada formulario
                    echo '<!-- Formulario ' . $titulo . ' -->';
                    echo '<div id="form-' . $id . '">';
                    echo '<form action="#" method="post">';

                    echo '<label for="vacante">Vacante Seleccionada:</label>';
                    echo '<input type="text" id="vacante" name="vacante" required placeholder="Ejemplo: ' . $titulo . '">';

                    echo '<label for="nombre">Nombre completo:</label>';
                    echo '<input type="text" id="nombre" name="nombre" required placeholder="Ejemplo: Juan Pérez">';

                    echo '<label for="direccion">Dirección de domicilio:</label>';
                    echo '<input type="text" id="direccion" name="direccion" required placeholder="Ejemplo: Calle 123, Ciudad">';

                    echo '<label for="telefono">Número de teléfono:</label>';
                    echo '<input type="tel" id="telefono" name="telefono" required pattern="[0-9]+" placeholder="Ejemplo: 123456789" oninput="this.value = this.value.replace(/[^0-9]/g, \'\');">';

                    echo '<label for="correo">Correo electrónico:</label>';
                    echo '<input type="email" id="correo" name="correo" required placeholder="Ejemplo: correo@ejemplo.com">';

                    echo '<label for="experiencia">Experiencia laboral:</label>';
                    echo '<textarea id="experiencia" name="experiencia" rows="4" required placeholder="Ejemplo: Trabajé en XYZ como..."></textarea>';

                    echo '<label for="educacion">Educación:</label>';
                    echo '<textarea id="educacion" name="educacion" rows="4" required placeholder="Ejemplo: Licenciatura en Ingeniería..."></textarea>';

                    echo '<label for="habilidades">Habilidades y calificaciones:</label>';
                    echo '<textarea id="habilidades" name="habilidades" rows="4" required placeholder="Ejemplo: Programación, trabajo en equipo..."></textarea>';

                    echo '<label for="referencias">Referencias:</label>';
                    echo '<textarea id="referencias" name="referencias" rows="4" required placeholder="Ejemplo: Nombre, cargo, contacto..."></textarea>';

                    echo '<button type="submit">Enviar Solicitud</button>';
                    echo '</form>';
                    echo '</div>';

            // Muestra otras oportunidades de trabajo (si las hay) sin el formulario
            while ($fila = $resultado->fetch_assoc()) {
                $id = $fila['id'];
                $titulo = $fila['titulo'];

                echo '<div class="vacante">';
                echo "<h3>$titulo</h3>";
                echo "<p>$subtitulo</p>";
                echo '<button class="postulate-button" onclick="scrollToForm(\'form-' . $id . '\', \'' . $titulo . '\')">Postúlate</button>';
                echo '</div>';
            }
        } else {
            // Maneja el caso en el que no hay oportunidades de trabajo
            echo "No hay oportunidades de trabajo disponibles.";
        }

        // Libera el conjunto de resultados
        $resultado->free();
    } else {
        // Maneja el error si la consulta falla
        echo "Error de consulta: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
    ?>
</div>

<div class="obtener">
    <p align="justify">Para obtener más información o postularte, ponte en contacto con nuestro equipo de recursos humanos. Estamos encantados de responder a tus preguntas y brindarte asistencia durante el proceso de solicitud. Tu interés en unirte a nuestro equipo es muy apreciado, y esperamos conocer más sobre ti y tu experiencia profesional. ¡No dudes en comunicarte con nosotros para iniciar este emocionante viaje juntos!</p>
</div>

<div class="mi-seccion">
    <section class="form-container">
        <h2 align="center">Solicitud de Empleo</h2>
        <?php
        // Conexión a la base de datos
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Obtén datos sobre empleos desde la base de datos
        $consulta = "SELECT id, titulo FROM trabajos";
        $resultado = $conn->query($consulta);

        // Verifica si la consulta fue exitosa
        if ($resultado) {
            // Obtiene un array asociativo
            if ($resultado->num_rows > 0) {
                // Obtiene la primera oportunidad de trabajo
                $fila = $resultado->fetch_assoc();
                $id = $fila['id'];
                $titulo = $fila['titulo'];

                // Genera el formulario de solicitud fuera del bucle
                    // Genera dinámicamente el HTML para cada formulario
                    echo '<!-- Formulario ' . $titulo . ' -->';
                    echo '<div id="form-' . $id . '">';
                    echo '<form action="#" method="post">';

                    echo '<label for="vacante">Vacante Seleccionada:</label>';
                    echo '<input type="text" id="vacante" name="vacante" required placeholder="Ejemplo: ' . $titulo . '">';

                    echo '<label for="nombre">Nombre completo:</label>';
                    echo '<input type="text" id="nombre" name="nombre" required placeholder="Ejemplo: Juan Pérez">';

                    echo '<label for="direccion">Dirección de domicilio:</label>';
                    echo '<input type="text" id="direccion" name="direccion" required placeholder="Ejemplo: Calle 123, Ciudad">';

                    echo '<label for="telefono">Número de teléfono:</label>';
                    echo '<input type="tel" id="telefono" name="telefono" required pattern="[0-9]+" placeholder="Ejemplo: 123456789" oninput="this.value = this.value.replace(/[^0-9]/g, \'\');">';

                    echo '<label for="correo">Correo electrónico:</label>';
                    echo '<input type="email" id="correo" name="correo" required placeholder="Ejemplo: correo@ejemplo.com">';

                    echo '<label for="experiencia">Experiencia laboral:</label>';
                    echo '<textarea id="experiencia" name="experiencia" rows="4" required placeholder="Ejemplo: Trabajé en XYZ como..."></textarea>';

                    echo '<label for="educacion">Educación:</label>';
                    echo '<textarea id="educacion" name="educacion" rows="4" required placeholder="Ejemplo: Licenciatura en Ingeniería..."></textarea>';

                    echo '<label for="habilidades">Habilidades y calificaciones:</label>';
                    echo '<textarea id="habilidades" name="habilidades" rows="4" required placeholder="Ejemplo: Programación, trabajo en equipo..."></textarea>';

                    echo '<label for="referencias">Referencias:</label>';
                    echo '<textarea id="referencias" name="referencias" rows="4" required placeholder="Ejemplo: Nombre, cargo, contacto..."></textarea>';

                    echo '<button type="submit">Enviar Solicitud</button>';
                    echo '</form>';
                    echo '</div>';
            } else {
                // Maneja el caso en el que no hay oportunidades de trabajo
                echo "No hay oportunidades de trabajo disponibles.";
            }

            // Libera el conjunto de resultados
            $resultado->free();
        } else {
            // Maneja el error si la consulta falla
            echo "Error de consulta: " . $conn->error;
        }

        // Cierra la conexión a la base de datos
        $conn->close();
        ?>
    </section>
</div>

<!-- Agregar el elemento SVG después de todos los formularios -->
<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="360" viewBox="0 0 1200 360" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 115L50 99.6667C100 84.3333 200 53.6667 300 69C400 84.3333 500 145.667 600 153.333C700 161 800 115 900 118.833C1000 122.667 1100 176.333 1150 203.167L1200 230V0H1150C1100 0 1000 0 900 0C800 0 700 0 600 0C500 0 400 0 300 0C200 0 100 0 50 0H0V115Z" fill="#F89A0C"/>
</svg>

<?php include 'llamar.php'; ?>

<div>
    <?php include 'footer.php'; ?>
</div>

<script>
    function scrollToForm(formId, vacante) {
        const formElement = document.getElementById(formId);
        formElement.scrollIntoView({ behavior: 'smooth' });

        // Actualizar el valor del campo de texto con el título de la vacante
        const vacanteInput = formElement.querySelector('input[name="vacante"]');
        vacanteInput.value = vacante;
    }
</script>

</body>
</html>
