<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <!-- Incluir Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Mantener los estilos CSS de los otros componentes -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">

  <!-- Opcional: Font Awesome para los botones del carrusel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<?php include('../components/header/header.php'); ?>

<!-- Carrusel de Bootstrap -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/images/photo4.avif" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption">
        <h3>Bienvenido a Nuestra Empresa</h3>
        <p>Nos especializamos en proyectos eléctricos y automatización.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/images/photo2.avif" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption">
        <h3>Innovación y Tecnología</h3>
        <p>Ofrecemos soluciones avanzadas para tus necesidades.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/images/photo3.avif" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption">
        <h3>Compromiso con la Calidad</h3>
        <p>Nos aseguramos de entregar productos y servicios de alta calidad.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<main>
  <h1>Bienvenido a Nuestra Empresa</h1>
  <p>Nos especializamos en proyectos eléctricos y automatización.</p>
</main>

<?php include('../components/footer/footer.php'); ?>

<!-- Incluir Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Esta sección de script es para tu archivo carousel.js, no es necesario si vas a usar el carrusel de Bootstrap
  // Tu script personalizado para el carrusel iría aquí
</script>

</body>
</html>
