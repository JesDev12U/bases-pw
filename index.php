<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mockup</title>
  <!-- Bootstrap CSS -->
  <link href="./utils/bootstrap5.3.0/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar superior -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
      <button class="btn btn-outline-secondary" id="menu-toggle">☰</button>
      <a class="navbar-brand ms-2" href="#">Empresa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Apps</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Games</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Books</a></li>
        </ul>
        <form class="d-flex ms-2">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">🔍</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Contenedor con menú lateral y contenido principal -->
  <div class="d-flex">
    <!-- Menú lateral -->
    <div class="bg-light border-end" id="sidebar" style="width: 250px;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="#">Inicio</a></li>
        <li class="list-group-item"><a href="#">Quienes somos</a></li>
        <li class="list-group-item"><a href="#">Próximos eventos</a></li>
      </ul>
    </div>

    <!-- Contenido principal -->
    <div class="container-fluid p-4">
      <h1 class="text-center">¡Bienvenido a condominios!</h1>
      <!-- Carrusel -->
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="...">
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

      <!-- Secciones: Quienes somos y Próximos eventos -->
      <div class="row mt-5">
        <div class="col-md-6">
          <h3>¿Quiénes somos?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel purus et metus aliquet fermentum.</p>
        </div>
        <div class="col-md-6">
          <h3>Próximos Eventos</h3>
          <div class="d-flex">
            <img src="https://via.placeholder.com/150" class="img-thumbnail me-2" alt="Evento 1">
            <img src="https://via.placeholder.com/150" class="img-thumbnail me-2" alt="Evento 2">
            <img src="https://via.placeholder.com/150" class="img-thumbnail" alt="Evento 3">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="./utils/bootstrap5.3.0/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle del menú lateral
    const toggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    toggleButton.addEventListener('click', () => {
      sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none';
    });
  </script>
</body>

</html>