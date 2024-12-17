<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mockup</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>utils/bootstrap_v5.1.0/bootstrap.min.css" />
  <!-- DataTables -->
  <link
    rel="stylesheet"
    href="<?php echo SITE_URL; ?>utils/datatables_v2.0.8/datatables.min.css" />
  <!-- FontAwesome -->
  <link
    rel="stylesheet"
    href="<?php echo SITE_URL; ?>utils/fontawesome-free_v5.15.4/css/all.min.css" />
  <!-- SweetAlert2 -->
  <link
    rel="stylesheet"
    href="<?php echo SITE_URL; ?>utils/sweetalert2_v11.11.1/sweetalert2.min.css" />
</head>

<body>
  <!-- Navbar superior -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
      <button class="btn btn-outline-secondary" id="menu-toggle">☰</button>
      <a class="navbar-brand ms-2" href="#">Empresa</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
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
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search" />
          <button class="btn btn-outline-primary" type="submit">🔍</button>
        </form>
        <?php
        if (count($_SESSION) !== 0)
          echo '<button class="btn btn-danger" id="btn-logout">Cerrar sesión</button>';
        else echo '<button class="btn btn-primary" id="btn-login">Iniciar sesión</button>';
        ?>
      </div>
    </div>
  </nav>

  <div class="d-flex">
    <!-- Menú lateral -->
    <div class="bg-light border-end" id="sidebar" style="width: 250px">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="<?php echo SITE_URL ?>">Página principal</a></li>
        <li class="list-group-item"><a href="#" id="link-productos">Productos</a></li>
      </ul>
    </div>
    <!-- Aqui va todo el contenido cambiante -->
    <?php $ctrl->renderContent(); ?>
  </div>
  <!-- Bootstrap JS -->
  <script src="<?php echo SITE_URL; ?>utils/bootstrap_v5.1.0/bootstrap.bundle.min.js"></script>
  <!-- JQuery JS -->
  <script src="<?php echo SITE_URL; ?>utils/jquery_v3.6.0/jquery.min.js"></script>
  <!-- Bootstrap Menu -->
  <script src="<?php echo SITE_URL; ?>utils/bootstrap-menu_v1.0.14/BootstrapMenu.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo SITE_URL; ?>utils/datatables_v2.0.8/datatables.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo SITE_URL; ?>utils/sweetalert2_v11.11.1/sweetalert2.min.js"></script>
  <!-- js/site.js -->
  <script src="<?php echo SITE_URL; ?>js/site.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      if (location.href.includes(`<?php echo RUTA_DEFAULT ?>`) && <?php echo count($_SESSION) ?> === 0)
        location.href = `<?php echo SITE_URL ?>`;

    });
  </script>
  <script>
    // Toggle del menú lateral
    const toggleButton = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("sidebar");
    toggleButton.addEventListener("click", () => {
      sidebar.style.display =
        sidebar.style.display === "none" ? "block" : "none";
    });
  </script>
  <script>
    const $btnLogin = document.getElementById("btn-login");
    const $btnLogout = document.getElementById("btn-logout");

    if ($btnLogin) {
      $btnLogin.addEventListener("click", (e) => {
        e.preventDefault();
        location.href = "<?php echo SITE_URL ?>login";
      });
    }

    if ($btnLogout) {
      $btnLogout.addEventListener("click", async (e) => {
        e.preventDefault();
        try {
          await fetch("_controller/cerrarSesion.php");
          location.href = "<?php echo SITE_URL ?>";
        } catch (err) {
          console.error(err);
        }
      });
    }
  </script>
  <script>
    document.getElementById("link-productos").addEventListener("click", (e) => {
      e.preventDefault();
      if (<?php echo count($_SESSION) ?> === 0) {
        Swal.fire({
          title: "Opción bloqueada",
          icon: "info",
          html: `Necesitas <b>iniciar sesión</b> para ver este contenido`,
          showCloseButton: true,
          focusConfirm: false,
          confirmButtonText: `
    <i class="fa fa-thumbs-up"></i> Ok!
  `,
          confirmButtonAriaLabel: "Thumbs up, great!",
          cancelButtonAriaLabel: "Thumbs down"
        });
      } else location.href = `<?php echo SITE_URL . RUTA_DEFAULT ?>`;
    });
  </script>
  <script>
    <?php $ctrl->renderJS(); ?>
  </script>
</body>

</html>