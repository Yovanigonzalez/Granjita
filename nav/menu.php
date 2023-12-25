<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <link rel="stylesheet" href="css/menu.css">
  <!-- Logo -->
  <link rel="shortcut icon" type="image/x-icon" href="log/ico.png">

</head>
<body>
  <header>
    <img class="logo" src="years/1993.png" alt="Logo de Distribuidora">
    
    <nav>
      <a href="index.php">Inicio</a>
      <a href="contacto.php">Contacto</a>
      <a href="acerca.php">Acerca de</a>
      <a href="tienda.php">Tienda</a>
      <a href="login.php">Login</a>
    </nav>

    <!-- Icono de hamburguesa -->
    <div class="burger-icon" onclick="toggleNav()">
      <img src="fonts/menu.png" alt="Menú">
    </div>
  </header>

  <!-- Contenido de la página aquí -->

  <script>
    function toggleNav() {
      var nav = document.querySelector('nav');
      nav.style.display = (nav.style.display === 'none' || nav.style.display === '') ? 'flex' : 'none';
    }
  </script>
</body>
</html>
