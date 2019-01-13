<?php
session_start();
if ( !isset( $_SESSION['id'])){
  header( 'Location:connexion.php');
}

if ( !empty( $_POST )){
  extract( $_POST );
  $erreur = [];

  require_once 'inc/functions.php';

  if ( empty( $oldpassword )){
    $erreur['oldpassword'] = 'Ancien mot de passe manquant';
  }
  elseif ( !password_ok()){
    $erreur['oldpassword'] = 'Ancien mot de passe érroné';
  }

  if ( empty( $newpassword)){
    $erreur['newpassword'] = 'Nouveau mot de passe manquant';
  }
  elseif ( strlen( $newpassword ) < 8 ){
    $erreur['newpassword'] = 'Le nouveau mot e passe doit faire au moins 8 caractères';

  }

  if ( empty( $newpasswordconf )){
    $erreur['newpasswordconf'] = 'Confirmation du nouveau mot de passe';
  }
  elseif ( $newpasswordconf != $newpassword ){
    $erreur['newpasswordconf'] = 'Confirmation du nouveau mot de passe differente';
  }

  if ( !$erreur ){
    password_save();

    $validation = 'Nouveau mot de passe enregistré !';
  }
  
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Changer de mot de passe</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include 'inc/header.php'?>
    <div class="container profil">
      <h1 class="text-xs-center">Changer de mot de passe</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
        <?php if ( isset( $erreur['oldpassword'])) : ?>
        <div class="alert alert-danger"><?= $erreur['oldpassword'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $erreur['newpassword'])) : ?>
        <div class="alert alert-danger"><?= $erreur[ 'newpassword'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $erreur['newpasswordconf'])) : ?>
        <div class="alert alert-danger"><?= $erreur['newpasswordconf'] ?></div>
        <?php endif; ?>
        <?php if ( isset($validation)) : ?>
        <div class="alert alert-success"><?= $validation ?></div>
        <?php endif; ?>
          <form action="password.php" method="post" class="p-y-3 p-x-2">
            <input type="password" name="oldpassword" class="form-control" placeholder="Ancien mot de passe">
            <input type="password" name="newpassword" class="form-control" placeholder="Nouveau mot de passe">
            <input type="password" name="newpasswordconf" class="form-control" placeholder="Confirmez le nouveau mot de passe">
            <input type="submit" class="btn btn-success" value="Changer de mot de passe">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
