<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Regístro</title>
    <link rel ="stylesheet" type = "text/css" href = "css.css">
  </head>
  <body>
    <form class="formulario"  method="post" action="insert_into.php">
    <h1>Regístrate</h1>
    <div class="contenedor">

        <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre Completo" name="nombre">
        </div>

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" placeholder="Correo Electronico" name="correo">
         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="pwd">
         </div>

         <input type="submit" value="Registrate" class="btn btn-primary">
         <p>Al registrarte, aceptas todas nuestras cuentas</p>
         <p>¿Ya tienes cuenta?<a class="link" href="inicio.php">Iniciar Sesion aquí</a></p>
     </div>
    </form>
  </body>
</html>
