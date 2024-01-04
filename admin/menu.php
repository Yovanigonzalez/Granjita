<?php
session_start();
?>

<?php
include '../config/config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <!--Logo-->
  <link rel="shortcut icon" type="image/x-icon" href="../log/ico.png">

  <!-- Enlaces a los archivos CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <!-- Icono de la página -->
  <link rel="icon" href="../logo/log.png" type="image/jpeg">

  <!-- Enlaces a los archivos JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Barra de navegación superior -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Barra de navegación a la izquierda -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
          </a>
        </li>
      </ul>

      <!-- Botones de la barra de navegación a la derecha -->
      <ul class="navbar-nav ml-auto">


        <style>
    .nav-icon {
        margin-right: 20px; /* Puedes ajustar el valor según tus preferencias */
    }
</style>

<?php
if (isset($_SESSION['nombre_usuario'])) {
    echo '<div class="nav-icon position-relative text-dark"><i class="fa fa-user-circle"></i> Hola! Bienvenido, ' . $_SESSION['nombre_usuario'] . '</div>';
    echo '<a class="nav-icon position-relative text-decoration-none" href="logout.php">';
    echo '<i class="fa fa-fw fa-sign-out-alt text-dark"></i> Cerrar Sesión</a>';

} else {
    echo '<a class="nav-icon position-relative text-decoration-none" href="login.php">';
    echo '<i class="fa fa-fw fa-user text-dark"></i> Iniciar Sesión</a>';
}
?>
        
      </ul>
    </nav>

<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Logo -->
  <a href="inicio.php" class="brand-link">
    <span class="brand-text font-weight-light">Panel del Administrador</span>
    <div class="text-center mb-4">
                            <img src="../log/ico.png" class="img-fluid rounded-circle" alt="Login Image" width="70px">
                        </div>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Menú -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

        
        <!-- Elemento de menú Productos con submenús Extra -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-images"></i>
            <p>Cambio de banner <i class="fas fa-angle-left right"></i></p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="banner.php" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Cambio de banner</p>
              </a>
            </li>
          </ul>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="crud_banner.php" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Crud Banner</p>
              </a>
            </li>
          </ul>
        </li>
        

<!-- Sección Tienda -->
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i> <!-- Cambié el icono aquí -->
        <p>Tienda <i class="fas fa-angle-left right"></i></p>
    </a>

    <!-- Submenús de Tienda -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="tienda.php" class="nav-link">
                <i class="fas fa-exchange-alt nav-icon"></i> <!-- Cambié el icono aquí -->
                <p>Cambio de Tienda</p>
            </a>
        </li>
    </ul>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="crud_tienda.php" class="nav-link">
                <i class="fas fa-database nav-icon"></i> <!-- Cambié el icono aquí -->
                <p>Crud Tienda</p>
            </a>
        </li>
    </ul>
</li>

<!-- Sección Misión -->
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-clipboard"></i> <!-- Cambié el icono aquí -->
        <p>Misión <i class="fas fa-angle-left right"></i></p>
    </a>

    <!-- Submenús de Misión -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="mision.php" class="nav-link">
                <i class="fas fa-exchange-alt nav-icon"></i> <!-- Cambié el icono aquí -->
                <p>Cambio de Misión</p>
            </a>
        </li>
    </ul>

</li>

<!-- Sección Visión -->
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-eye"></i> <!-- Cambié el icono aquí -->
        <p>Visión <i class="fas fa-angle-left right"></i></p>
    </a>

    <!-- Submenús de Visión -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="vision.php" class="nav-link">
                <i class="fas fa-exchange-alt nav-icon"></i> <!-- Cambié el icono aquí -->
                <p>Cambio de Visión</p>
            </a>
        </li>
    </ul>

</li>


        
        <li class="nav-item">
        <a href="logout.php" class="nav-link">
            <i class="nav-icon fas fa-door-closed"></i>
            <p>Cerrar sesión</p>
        </a>
        </li>

  </aside>