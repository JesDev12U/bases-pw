//Anular el submit del formulario
let formulario = document.getElementById("formulario");
formulario.addEventListener("submit", formulario_submit);

function formulario_submit(e) {
  e.preventDefault();

  //procesamiento asincrono
  asyncConfirmProcessForm(
    formulario,
    "<?php echo SITE_URL; ?>_controller/AsyncMtoProducto.php",
    "Confirme la inserción de datos",
    "Está seguro de proceder?",
    "Resultado de la inserción"
  );
}
