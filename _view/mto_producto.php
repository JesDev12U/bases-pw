<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header text-center">
      <h5>Nuevo</h5>
    </div>
    <div class="card-body">
      <form id="formulario">
        <div class="mb-3">
          <input type="hidden" name="peticion" value="<?php echo $this->peticion; ?>">
          <label for="id" class="form-label">id</label>
          <input
            type="text"
            class="form-control"
            id="id"
            name="id"
            readonly
            value="<?php echo $this->id !== null ? $this->id : "" ?>" />
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">nombre</label>
          <input
            type="text"
            class="form-control"
            id="nombre"
            name="nombre"
            value="<?php echo $this->nombre !== null ? $this->nombre : "" ?>"
            required />
        </div>
        <div class="mb-3">
          <label for="precio" class="form-label">precio</label>
          <input
            type="number"
            class="form-control"
            id="precio"
            name="precio"
            value="<?php echo $this->precio !== null ? $this->precio : "0" ?>"
            min="0"
            required />
        </div>
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-floppy-disk"></i>
            Guardar
          </button>
        </div>
      </form>
      <input
        type="button"
        value="Regresar"
        class="btn btn-danger"
        id="btn-regresar" />
    </div>
    <div class="card-footer text-muted text-center">
      Rellene la información de cada campo.
    </div>
  </div>
</div>
<script>
  document.getElementById("btn-regresar").addEventListener("click", () => {
    location.href = "<?php echo SITE_URL ?>";
  });
</script>