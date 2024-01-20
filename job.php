<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/job.css">
    <title>Granjita | Bolsa de trabajo</title>
</head>
<body>

    <h1>Bolsa de Trabajo <br> "La Granjita"</h1>

    <div class="job">
        <p align="justify">La Granjita, abastecedora de pollo, está buscando personas apasionadas y comprometidas para unirse a nuestro equipo. Consulta a continuación para obtener más información sobre las oportunidades de trabajo.</p>
    </div>

    <h2>Oportunidades de Trabajo</h2>

    <div class="oportunidades">
        <div class="vacante">
            <h3>Asistente de Producción</h3>
            <p>Apoya en las tareas diarias de producción de pollos.</p>
            <p>Requisitos: Experiencia en granjas avícolas, capacidad para trabajar en equipo.</p>
            <button class="postulate-button" onclick="scrollToForm('form-asistente', 'Asistente de Producción')">Postúlate</button>
        </div>

        <div class="vacante">
            <h3>Representante de Ventas</h3>
            <p>Promociona y vende nuestros productos a clientes.</p>
            <p>Requisitos: Habilidades de comunicación, experiencia en ventas preferida.</p>
            <button class="postulate-button" onclick="scrollToForm('form-asistente', 'Representante de Ventas')">Postúlate</button>
        </div>

        <div class="vacante">
            <h3>Cuidador de Aves</h3>
            <p>Responsable del cuidado y bienestar de las aves en la granja.</p>
            <p>Requisitos: Conocimientos en avicultura, atención a los detalles.</p>
            <button class="postulate-button" onclick="scrollToForm('form-asistente', 'Cuidador de Aves')">Postúlate</button>
        </div>

        <div class="vacante">
            <h3>Analista de Calidad</h3>
            <p>Evalúa y asegura la calidad de los productos avícolas.</p>
            <p>Requisitos: Experiencia en control de calidad, conocimientos en normativas sanitarias.</p>
            <button class="postulate-button" onclick="scrollToForm('form-asistente', 'Analista de Calidad')">Postúlate</button>
        </div>

        <div class="vacante">
            <h3>Coordinador de Logística</h3>
            <p>Supervisa y coordina la distribución eficiente de los productos.</p>
            <p>Requisitos: Experiencia en logística, habilidades de coordinación.</p>
            <button class="postulate-button" onclick="scrollToForm('form-asistente', 'Coordinador de Logística')">Postúlate</button>
        </div>
    </div>

        <div class="obtener">
        <p align="justify">Para obtener más información o postularte, ponte en contacto con nuestro equipo de recursos humanos. Estamos encantados de responder a tus preguntas y brindarte asistencia durante el proceso de solicitud. Tu interés en unirte a nuestro equipo es muy apreciado, y esperamos conocer más sobre ti y tu experiencia profesional. ¡No dudes en comunicarte con nosotros para iniciar este emocionante viaje juntos!</p>
        </div>
		
    <div class="mi-seccion">
        <section class="form-container">
            <h2 align="center">Solicitud de Empleo</h2>

            <!-- Formulario Asistente -->
            <div id="form-asistente">
                <form action="#" method="post">

                <label for="vacante">Vacante Seleccionada:</label>
                <input type="text" id="vacante" name="vacante" required placeholder="Ejemplo: Cargador/Cortador">


                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ejemplo: Juan Pérez">

                  <label for="direccion">Dirección de domicilio:</label>
                  <input type="text" id="direccion" name="direccion" required placeholder="Ejemplo: Calle 123, Ciudad">

                  <label for="telefono">Número de teléfono:</label>
                  <input type="tel" id="telefono" name="telefono" required pattern="[0-9]+" placeholder="Ejemplo: 123456789" oninput="this.value = this.value.replace(/[^0-9]/g, '');">

                  <label for="correo">Correo electrónico:</label>
                  <input type="email" id="correo" name="correo" required placeholder="Ejemplo: correo@ejemplo.com">

                  <label for="experiencia">Experiencia laboral:</label>
                  <textarea id="experiencia" name="experiencia" rows="4" required placeholder="Ejemplo: Trabajé en XYZ como..."></textarea>

                  <label for="educacion">Educación:</label>
                  <textarea id="educacion" name="educacion" rows="4" required placeholder="Ejemplo: Licenciatura en Ingeniería..."></textarea>

                  <label for="habilidades">Habilidades y calificaciones:</label>
                  <textarea id="habilidades" name="habilidades" rows="4" required placeholder="Ejemplo: Programación, trabajo en equipo..."></textarea>

                  <label for="referencias">Referencias:</label>
                  <textarea id="referencias" name="referencias" rows="4" required placeholder="Ejemplo: Nombre, cargo, contacto..."></textarea>

                  <button type="submit">Enviar Solicitud</button>
              </form>

            </div>
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
        const vacanteInput = document.getElementById('vacante');
        vacanteInput.value = vacante;
    }
</script>


</body>
</html>
