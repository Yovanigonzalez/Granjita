<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Página con Sección Dividida</title>
  <style>
    /* Agrega estilos adicionales según sea necesario */
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .section-container {
      display: flex;
      flex-wrap: wrap;
    }

    .left-half, .right-half {
      flex: 1;
      padding: 20px;
    }

    .button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 20px;
      background-color: #F89A0C;
      border: 10px solid #F89A0C;
      color: #FFF;
      cursor: pointer;
      border-radius: 10px;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-style: normal;
      line-height: normal;
    }

    @media screen and (max-width: 768px) {
      .section-container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<section class="section-container">
  <div class="left-half">
    <ul>
      <li align="justify">Colaboraciones Locales: Trabajamos de la mano con negocios locales para fortalecer la presencia de La Granjita en la comunidad. ¿Quieres ser parte de esta experiencia?</li>
      <br>
      <li align="justify">Forma Parte de Nuestra Familia: Distribuidora La Granjita busca establecer relaciones duraderas. Únete a nosotros y sé parte de una red comprometida con la frescura y calidad.</li>
    </ul>
  </div>
  <div class="right-half">
  <button class="button" onclick="irAContacto()">Unirse</button>

<script>
    function irAContacto() {
        window.location.href = 'contacto.php';
    }
</script>
</div>
</section>

</body>
</html>
