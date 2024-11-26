<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mockup</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./utils/bootstrap_v5.1.0/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./utils/datatables_v2.0.8/datatables.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="./utils/fontawesome-free_v5.15.4/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="./utils/sweetalert2_v11.11.1/sweetalert2.min.css">
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

    <div class="container-fluid p-4">
      <button class="button bg-primary text-white">
        <i class="fas fa-plus"></i>
        Agregar
      </button>
      <table id="tblDatos" class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Sabritas</td>
            <td>35.5</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(0)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ruffles</td>
            <td>35.5</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(1)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Coca-Cola</td>
            <td>50</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(2)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Doritos</td>
            <td>15</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(3)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jarritos Manzana</td>
            <td>22</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(4)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Oreo</td>
            <td>18</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(5)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>Principe de limon</td>
            <td>19</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(6)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>Canelitas</td>
            <td>15</td>
            <td>
              <a href="#">
                <i class="fas fa-pen"></i>
                Modificar
              </a>
              <a href="javascript:eliminarRegistro(7)">
                <i class="fas fa-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="./utils/bootstrap_v5.1.0/bootstrap.bundle.min.js"></script>
  <!-- JQuery JS -->
  <script src="./utils/jquery_v3.6.0/jquery.min.js"></script>
  <!-- Bootstrap Menu -->
  <script src="./utils/bootstrap-menu_v1.0.14/BootstrapMenu.min.js"></script>
  <!-- DataTables -->
  <script src="./utils/datatables_v2.0.8/datatables.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="./utils/sweetalert2_v11.11.1/sweetalert2.min.js"></script>
  <script>
    // Toggle del menú lateral
    const toggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    toggleButton.addEventListener('click', () => {
      sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none';
    });
  </script>
  <script>
    var tblDatos = new DataTable("#tblDatos");

    function eliminarRegistro(ordinal) {
      Swal.fire({
        title: "¿Estás seguro?",
        text: "No vas a poder salvar el registro eh!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, eliminalo!"
      }).then((result) => {
        if (result.isConfirmed) {
          //TODO: Eliminar el registro en la BD
          tblDatos.row(ordinal).remove().draw();
          Swal.fire({
            title: "¡Eliminado!",
            text: "El registro ha sido eliminado",
            icon: "success"
          });
        }
      });
    }
  </script>
</body>

</html>