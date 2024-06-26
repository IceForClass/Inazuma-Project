<?php include ("../include/extra.inc.php"); ?>

<?php headHTML(); ?>

<body id="body" class="bg-dark">
  <?php headerHTML(); ?>
  <main>
    <!--Estilo para nada sacado de bootstrap-->
    <section class="h-100 gradient-form">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="../Imagenes/Logo.png" style="width: 155px;" alt="logo" class="bg-black rounded-circle">
                      <h4>Inazuma</h4>
                    </div>

                    <form method="POST" action="../MySql/checklogin.php">
                      <?php
                      if (isset($_GET["msg"])) { ?>
                        <div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>
                        <?php
                      }
                      ?>
                      <p>Regístrate con tu cuenta</p>

                      <div class="form-outline mb-3">
                        <input type="text" class="form-control" id="usuario" name="usuario" value="">
                        <label class="form-label" for="form2Example11">Nombre De Usuario</label>
                      </div>

                      <div class="form-outline mb-3">
                        <input type="text" class="form-control" id="password" name="password" value="">
                        <label class="form-label" for="form2Example22">Contraseña</label>
                      </div>

                      <div class="text-center pt-1 pb-1">
                        <button class="btn btn-primary btn-block fa-lg mb-3" type="submit" style=" background: linear-gradient(to right, #d8363a, rgb(5, 9, 252));">Login</button>
                        <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                      </div>

                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2"> ¿No tienes una cuenta?</p>
                        <a href="signup.php" class="btn btn-outline-danger">Crea una nueva</a>
                      </div>

                    </form>

                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center text-center" style="background: linear-gradient(to right, #d8363a, rgb(5, 9, 252));">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">¡Bienvenido al mundo de inazuma!</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php footerHTML(); ?>
  <script src="/archivo.js"></script>
</body>

</html>