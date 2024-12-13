var tblDatos = new DataTable("#tblDatos");

function eliminarRegistro(ordinal, id) {
  Swal.fire({
    title: "¿Estás seguro?",
    text: "No vas a poder salvar el registro eh!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminalo!",
  }).then(async (result) => {
    if (result.isConfirmed) {
      try {
        await fetch("<?php echo SITE_URL; ?>_controller/AsyncMtoProducto.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            peticion: "DELETE",
            id,
          }),
        });
      } catch (err) {
        Swal.fire({
          title: "Error :(",
          text: err,
          icon: "error",
        });
      }
      tblDatos.row(ordinal).remove().draw();
      Swal.fire({
        title: "¡Eliminado!",
        text: "El registro ha sido eliminado",
        icon: "success",
      });
    }
  });
}
