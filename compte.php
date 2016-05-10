<?php
session_start();
if ( !isset( $_SESSION['id'] ) ) {
  header( 'Location: connexion.php' );
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon compte</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require_once 'inc/header.php'; ?>
    <div class="container profil">
      <h1>Mon compte</h1>
      <a href="avatar.php" class="btn btn-success">Changer mon image de profil</a>
      <a href="password.php" class="btn btn-success">Changer mon mot de passe</a>
    </div>
  </body>
</html>
