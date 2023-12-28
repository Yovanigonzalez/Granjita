<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División en Dos</title>
    <style>
        /* Estilo para los contenedores */
        .contenedor {
            display: flex; /* Utilizamos flexbox para distribuir los elementos */
        }

        /* Estilo para cada sección */
        .seccion {
            flex: 1; /* Hace que cada sección ocupe el mismo espacio disponible */
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <div class="seccion">
            <!-- Contenido de la primera sección -->
            <h2>Sección 1</h2>
            <p>Contenido de la primera sección.</p>
        </div>

        <div class="seccion">
            <!-- Contenido de la segunda sección -->
            <h2>Sección 2</h2>
            <p>Contenido de la segunda sección.</p>
        </div>
    </div>

</body>
</html>
