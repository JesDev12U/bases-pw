<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mockup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar superior -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="configMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Configuración
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="configMenu">
              <li><a class="dropdown-item" href="#">Account settings</a></li>
              <li><a class="dropdown-item" href="#">Statistics</a></li>
              <li><a class="dropdown-item" href="#">Notifications</a></li>
              <li><a class="dropdown-item" href="#">Payments</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-light border-end" id="sidebar" style="min-width: 200px;">
      <ul class="nav flex-column p-3">
        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Eventos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Reglamento</a></li>
      </ul>
    </div>

    <!-- Contenido principal -->
    <div class="container-fluid p-3">
      <!-- Carrusel de imágenes -->
      <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Texto y botones -->
      <div class="row">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-md-4">
          <button class="btn btn-primary w-100 mb-3">Botón</button>
        </div>
      </div>

      <!-- Galería -->
      <div class="row">
        <div class="col-md-4 mb-3">
          <img src="https://via.placeholder.com/400x200" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-md-4 mb-3">
          <img src="https://via.placeholder.com/400x200" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-md-4 mb-3">
          <img src="https://via.placeholder.com/400x200" class="img-fluid rounded" alt="...">
        </div>
      </div>

      <!-- Mapa -->
      <div class="mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509179!2d144.95373531590494!3d-37.81627974202138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f0da9dbf%3A0x5045675218ce6e0!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1614643139376!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>