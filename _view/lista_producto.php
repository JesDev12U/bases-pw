<!-- Area de contenido -->
<div class="container-fluid p-4">
  <button class="button bg-primary text-white" id="btn-agregar">
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
      <?php $ordinal = 0 ?>
      <?php foreach ($this->datos as $reg): ?>
        <tr>
          <td><?php echo $reg["id"] ?></td>
          <td><?php echo $reg["nombre"] ?></td>
          <td><?php echo $reg["precio"] ?></td>
          <td>
            <a href="<?php echo RUTA_DEFAULT ?>/editar/<?php echo $reg["id"] ?>">
              <i class="fas fa-pen"></i>
              Modificar
            </a>
            <a href="javascript:eliminarRegistro(<?php echo $ordinal++ ?>, <?php echo $reg["id"] ?>)">
              <i class="fas fa-trash"></i>
              Eliminar
            </a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<script>
  document.getElementById("btn-agregar").addEventListener("click", () => {
    location.href = "<?php echo RUTA_DEFAULT ?>/agregar";
  });
</script>