<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'atef.lachhab1@gmail.com';
  $subject = 'Nouveau message du formulaire de contact';
  $body = "Nom: $name\nE-mail: $email\n\nMessage:\n$message";
  
  $headers = "From: $email\r\nReply-To: $email\r\n";
  
  if (mail($to, $subject, $body, $headers)) {
    echo 'Votre e-mail a été envoyé avec succès.';
  } else {
    echo 'Une erreur s\'est produite lors de l\'envoi de votre e-mail.';
  }
}
?>
