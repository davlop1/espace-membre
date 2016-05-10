<?php
session_start();
if ( !isset( $_SESSION['id'] ) ) {
  header( 'Location: connexion.php' );
}

require 'inc/functions.php';

$membre = account_informations();

if ( isset( $_FILES['avatar'] ) && $_FILES['avatar']['error'] == 0 ) {
  if ( !in_array( $_FILES['avatar']['type'], ['image/png', 'image/jpeg'] ) ) {
    $erreur = 'Format incorrect (PNG et JPEG acceptées)';
  }
  elseif ( $_FILES['avatar']['size'] >  102400 ) {
    $erreur = 'Image trop volumineuse (supérieure à 100Ko)';
  }

  if ( !isset( $erreur ) ) {
    $extension = str_replace( 'image/', '', $_FILES['avatar']['type'] );
    $name = bin2hex( random_bytes( 8 ) ) . '.' . $extension;

    if ( move_uploaded_file( $_FILES['avatar']['tmp_name'], 'img/' . $name ) ) {
      $test = bdd_update( 'UPDATE membre SET avatar = :avatar WHERE id = :id', [ 'avatar' => $name, 'id' => $_SESSION['id'] ] );

      echo $test;

      if ( $membre['avatar'] != 'default-profile.png' )
        unlink( 'img/' . $membre['avatar'] );

      header( 'Location: avatar.php' );
    }
    else {
      $erreur = 'Erreur lors de l\'envoi du fichier';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Changer d'avatar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require_once 'inc/header.php'; ?>
    <div class="container profil">
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <h1 class="text-xs-center">Changer d'avatar</h2>
          <div class="center-block">
            <img src="img/<?= $membre['avatar'] ?>" alt="avatar" class="img-circle img-fluid">
          </div>
          <?php if  ( isset( $erreur ) ) : ?>
            <div class="alert alert-danger"><?= $erreur ?></div>
          <?php endif; ?>
          <form action="avatar.php" method="post" enctype="multipart/form-data" class="p-y-3 p-x-2">
            <input type="file" name="avatar" class="form-control-file">
            <input type="submit" class="btn btn-success" value="Changer d'avatar">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
