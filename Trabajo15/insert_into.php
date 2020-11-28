<?php
 include("conexion.php");

    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $consulta_slq = "INSERT INTO inicio(nombre,edad,correo,pwd) VALUES ('$name','$email','$pwd')";

    $envio_consulta = $conexion->query($consulta_slq);

    header('Location: index.php');

     ?>
