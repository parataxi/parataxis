<?php 
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = 'Formulario Rellenado';
  $mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];

echo
  if(mail('parataxis.nuup@gmail.com', $asunto, $mensaje)){
    echo "Correo enviado";
  }
 ?>
