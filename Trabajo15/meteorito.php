<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Meteoritos</title>
    <link rel ="stylesheet" type = "text/css" href = "css.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: : #341240;">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">INICIO<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link inicio btn btn-outline-success" style="color: blue;" href="inicio.php">INICIAR SESIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-ce btn btn-outline-danger" href="#">CERRAR SESIÓN</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">METEORITOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="satelite.php">SATELITES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="predecir.php">PREDICCIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link config" href="#">CONFIGURACIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link regis" href="register.php">REGISTRARSE</a>
          </li>
        </ul>

      </div>
    </nav>
    <div class="jumbotron">
      <h1 class="display-4">Antes de seguir fijese en este resumen...</h1>
      <p class="lead">La NASA considera potencialmente peligrosos a los asteroides que tengan un tamaño mayor a 140 metros y se acerquen a la Tierra a menos de 7 480 000 kilómetros </p>
      <hr class="my-4">
      <p>Si quieres saber mas al respecto, clickeá el botón de abajo.</p>
      <a class="btn btn-primary btn-lg learn" href="https://www.diariojornada.com.ar/271296/paismundo/un_asteroide_potencialmente_peligroso_pasara_cerca_de_la_tierra_este_29_de_abril/#:~:text=Seg%C3%BAn%20la%20clasificaci%C3%B3n%20de%20objetos,de%207%20480%20000%20kil%C3%B3metros." target="_blank" role="button">CLIK AQUI</a>
    </div>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Diametro(Aproximado)</th>
    </tr>
  </thead class="thead-light">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>3362 khufu</td>
      <td>0,7 km</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2004 LJ1</td>
      <td>2,41 km</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1992 FE</td>
      <td>1 km</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Bennu</td>
      <td>490 m</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>1996 EN/td>
      <td>2 km</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>2002 AJ129</td>
      <td>Entre	0,5–1,2 km.</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>1999 JM8</td>
      <td>7 km</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>1990 MF</td>
      <td>1 km</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Adonis</td>
      <td>0,6 km</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Orpheus</td>
      <td>0,3 km</td>
    </tr>
  </tbody>
</table>
  </body>
</html>
