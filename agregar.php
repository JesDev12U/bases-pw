<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header text-center">
        <h5>Nuevo</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input type="text" class="form-control" id="id" placeholder="Placeholder">
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Placeholder">
          </div>
          <div class="mb-3">
            <label for="precio" class="form-label">precio</label>
            <input type="number" class="form-control" id="precio" value="0" min="0">
          </div>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary me-2">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
      <div class="card-footer text-muted text-center">
        Rellene la información de cada campo.
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>