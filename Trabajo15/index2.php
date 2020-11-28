<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Inicio</title>
      <link rel ="stylesheet" type = "text/css" href = "css.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: : #341240;">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">INICIO<span class="sr-only">(current)</span></a>
          </li>
          <?php
            if (isset($_SESSION['nombre'])) {
              echo '<li class="nav-item">
                <a class="nav-link config" href="#">CONFIGURACIÓN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-ce btn btn-outline-danger" href="#">CERRAR SESIÓN</a>
              </li>';
            }
            else {
              echo '<li class="nav-item">
                <a class="nav-link regis" href="register.php">REGISTRARSE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link inicio" style="color: blue;" href="inicio.php">INICIAR SESIÓN</a>
              </li>';
            }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="meteorito.php">METEORITOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="satelites.php">SATELITES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="predecir.php">PREDICCIÓN</a>
          </li>
        </ul>
      </div>
              </nav>
              <div id="caracolExampleFade" class="caracol slide caracol-fade" data-ride="caracol">
                <div class="caracol-inner">
                  <div class="caracol-item active">
                    <img src="imagenes/1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="caracol-item">
                    <img src="imagenes/2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="caracol-item">
                    <img src="imagenes/3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="caracol-control-prev" href="#caracolExampleFade" role="button" data-slide="prev">
                  <span class="caracol-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="caracol-control-next" href="#caracolExampleFade" role="button" data-slide="next">
                  <span class="caracol-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              </body>
            </html>
