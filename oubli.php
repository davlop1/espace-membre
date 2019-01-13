<?php
session_start();
if ( isset( $_SESSION['id'])){
  header( 'Location:compte.php');
}

if ( !empty( $_POST)) {
  extract( $_POST);

  require_once 'inc/functions.php';

  if (empty( $email)){
    $erreur = 'Adresse e-mail manquante';
}
  elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreur = "Adresse e-mail invalide";
}
  elseif (mail_free ($email)){
    $erreur = 'Adresse e-mail inconnue';
  }

  if ( !isset( $erreur)) {
    $password = bin2hex ( random_bytes(8));

    password_save( $password );
     
     $message = '
     <h1>Voici votre nouveau mot de passse : </h1>
     <p>
        Mot de passe : <b>' .$password . '</b><br>
        Pensez à le changer lors de votre prochaine visite !
     </p<
     ';

     mail_html('Nouveau mot de passe', $message);
     
     unset( $email );

     $validation = 'Nouveau mot de passe envoyé !';


  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include 'inc/header.php'?>
    <div class="container">
      <h1 class="text-xs-center">Mot de passe oublié</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
        <?php if ( isset($erreur)) :?>
        <div class="alert alert-danger"><?= $erreur ?></div>
        <?php endif; ?>
        <?php if ( isset($validation)) : ?>
        <div class="alert alert-success"><?= $validation ?></div>
        <?php endif; ?>
          <form action="oubli.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail de votre compte" value="<?php if (isset($email)) echo $email; ?>">
            <input type="submit" class="btn btn-success" value="Soumettre">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
