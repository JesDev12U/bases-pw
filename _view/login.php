<form id="form-login">
  <div class="mb-3">
    <label for="email" class="form-label">Correo electrónico</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Iniciar sesión</button>
</form>
<script>
  document
    .getElementById("form-login")
    .addEventListener("submit", async function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      let datos = {};
      for (const [clave, valor] of formData.entries()) {
        datos[clave] = valor;
      }

      try {
        let response = await fetch("_controller/ajaxLogin.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(datos),
        });

        if (!response.ok) {
          throw new Error(response.statusText);
        }

        let json = await response.json();
        if (!json.resultado) {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Credenciales incorrectas",
          });
        } else {
          location.href = "<?php echo SITE_URL . RUTA_DEFAULT ?>";
        }
      } catch (err) {
        console.error(err);
        Swal.fire({
          icon: "error",
          title: "Error",
          text: err,
        });
      }
    });
</script>