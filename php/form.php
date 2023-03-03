<?php
if(isset($_POST['submit'])) {
  $to = "diananayelisf00@gmail.com";
  $subject = "Nuevo formulario enviado";
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $age = $_POST['age'];
  $civilstatus = $_POST['civilstatus'];
  $message = "Nombre Completo: " . $firstname . "\r\nCorreo Electrónico: " . $email . "\r\nTeléfono: " . $phone . "\r\nEdad: " . $age . "\r\nEstado Civil: " . $civilstatus;
  $headers = "From: formulario@example.com" . "\r\n" . "CC: copia@example.com";
  mail($to, $subject, $message, $headers);
  echo "El formulario ha sido enviado con éxito.";
}
?>
