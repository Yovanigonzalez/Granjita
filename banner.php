<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Granjita</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" href="css/banner.css">

  <style>
  /* Existing styles for the banner */
  .banner {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #F89A0C;
    position: relative;
    flex-direction: column;
    text-align: center;
    height: 300px; /* Set a fixed height for the banner container */
  }

  .banner img {
    max-width: 100%; /* Make sure the image doesn't exceed the container width */
    height: 100%; /* Set the image height to fill the container */
    object-fit: cover; /* Maintain aspect ratio while covering the container */
  }

  .banner-text {
    max-width: 80%;
  }

  @media (min-width: 768px) {
    /* Additional styles for larger screens if needed */
    .banner {
      flex-direction: row;
      text-align: left;
    }

    .banner img {
      margin-bottom: 0;
    }
  }
</style>


</head>
<body>

  <div class="contenedor">
    <!-- Tu contenido actual -->
    <img class="imagen" src="log/ico.png" alt="Logo de Distribuidora">
    <div class="texto">
      <h1>ABASTECEDORA<br> LA 'GRANJITA' </h1>
      <br>
    
      <h4>La Granjita es una abastecedora de pollo comprometida con brindar productos avícolas frescos y de primera calidad. Ubicados en el corazón de Tehuacán, Puebla, nos esforzamos por ofrecer a nuestros clientes opciones saludables y deliciosas de pollo y productos avícolas.</h4>
      <button>Conocer más</button>
    </div>
  </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="900" height="130" viewBox="0 0 900 130" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L75 9.28571C150 18.5714 300 37.1429 450 37.1429C600 37.1429 750 18.5714 825 9.28571L900 0V130H825C750 130 600 130 450 130C300 130 150 130 75 130H0V0Z" fill="#F89A0C"/>
    </svg>

    <!-- Nuevo banner con imagen y texto -->
    <div class="banner" id="banner">
      <div class="banner-text">
        <h2>¡Bienvenido a La Granjita!</h2>
        <p>Descubre nuestros productos avícolas frescos y de alta calidad. Estamos comprometidos en ofrecerte opciones saludables y deliciosas.</p>
      </div>
      <img src="years/teh.png" alt="Imagen de La Granjita">
    </div>

  </div>

  <script>
    // Contenido del banner
    const banners = [
      {
        title: "¡Bienvenido a La Granjita!",
        description: "Descubre nuestros productos avícolas frescos y de alta calidad. Estamos comprometidos en ofrecerte opciones saludables y deliciosas.",
        imagePath: "years/teh.png"
      },
      {
        title: "Descubre nuestras promociones",
        description: "Aprovecha nuestras ofertas especiales en productos avícolas. Calidad y buen precio en cada compra.",
        buttonText: "Ver promociones",
        imagePath: "years/atencion.png"
      },
      {
        title: "Recetas deliciosas con pollo",
        description: "Explora nuestras recetas exclusivas con pollo. Prepara platillos increíbles con los productos de La Granjita.",
        imagePath: "years/1993.png"
      }
      // Agrega más banners según sea necesario
    ];

    // Función para cambiar el banner cada 3 segundos
    let currentBannerIndex = 0;
    function changeBanner() {
      const banner = document.getElementById('banner');
      const currentBanner = banners[currentBannerIndex];
      banner.innerHTML = `
        <div class="banner-text">
          <h2>${currentBanner.title}</h2>
          <p>${currentBanner.description}</p>
        </div>
        <img src="${currentBanner.imagePath}" alt="Imagen de La Granjita">
      `;
      currentBannerIndex = (currentBannerIndex + 1) % banners.length;
    }

    // Cambia el banner cada 3 segundos
    setInterval(changeBanner, 3000);
  </script>

</body>
</html>











