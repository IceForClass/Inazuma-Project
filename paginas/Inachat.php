<?php include ("../include/extra.inc.php") ?>

<?php headHTML(); ?>

<body class="bg-dark text-white">
  <?php headerHTML(); ?>


  <div class="container mt-5">
    <h2 class="mb-4">Inachat - Sección de Comentarios</h2>

    <?php
    if (isset($_SESSION["username"])) {
      ?>


      <!-- Formulario para agregar comentarios -->
      <form>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
        </div>
        <div class="form-group">
          <label for="comentario">Comentario:</label>
          <textarea class="form-control mb-2" id="comentario" rows="3" placeholder="Escribe tu comentario"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
      </form>

      <hr>

      <?php

    } else { ?>

      <div class="alert alert-danger text-center">
        <h3>Tienes que estar registrado para poder escribir un comentario</h3>
        <a href="../paginas/login.php" class="btn btn-outline-primary me-2">Quiero iniciar sesión</a>
        <a href="../paginas/signup.php" class="btn btn-outline-primary me-2">Tengo que crearme una cuenta</a>      </div>

      <?php

    }
    ?>

    <!-- Comentarios -->
    <div>

    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php footerHTML(); ?>

</body>

</html>