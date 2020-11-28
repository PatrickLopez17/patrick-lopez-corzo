<?php
 include("conexion.php");

 $pais = $_POST['pais'];
 $nombre2 = $_POST['nombre2'];
 $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 $consulta_slq = "INSERT INTO pedido(telefono,plataforma,precio,destinatario) VALUES ('$pais','$nombre2','$imagen')";

 $envio_consulta = $conexion->query($consulta_slq);

header("Location:inicio.php");
 ?>
