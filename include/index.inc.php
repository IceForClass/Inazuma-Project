<?php function headHTML()
{ ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="js/script.js"></script>
  </head>

<?php } ?>


<?php function headerHTML()
{ ?>
  <header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

    <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0">
      <img src="Imagenes/logo.png" alt="Logo" width="80" height="80">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-2 link-light">Home</a></li>
      <li><a href="paginas/equipos.php" class="nav-link px-2 link-light">Equipos</a></li>
      <li><a href="paginas/Stats.php" class="nav-link px-2 link-light">Stats</a></li>
      <li><a href="#" class="nav-link px-2 link-light">FAQs</a></li>
      <li><a href="#" class="nav-link px-2 link-light">About</a></li>
    </ul>
    <?php
    session_start();
    ?>
    <div class="col-md-3 text-end">
      <?php
      if (isset($_SESSION["username"])) {
        ?>
        <a href="MySql/logout.php" class="btn btn-outline-primary me-2">Logout</a>
        <?php
      } else {
        ?>
        <a href="paginas/login.php" class="btn btn-outline-primary me-2">Login</a>
        <?php
      }
      ?>
      <a href="paginas/signup.php" class="btn btn-outline-primary me-2">Sign-up</a>
    </div>
  </header>

<?php } ?>

<?php function footerHTML()
{ ?>
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0">
        <img src="Imagenes/logo.png" alt="Logo" width="80" height="80">
      </a>
    </div>
    <div class="text-center">
      <span class="mb-3 mb-md-0 text-light">© 2024 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
            <use xlink:href="#twitter"></use>
          </svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
            <use xlink:href="#instagram"></use>
          </svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#" action="tabla.php"><svg class="bi" width="24" height="24">
            <use xlink:href="#facebook"></use>
          </svg></a></li>
    </ul>
  </footer>
<?php } ?>