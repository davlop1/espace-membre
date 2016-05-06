<?php
session_start();
if ( isset( $_SESSION['id'] ) ) {
  header( 'Location: compte.php' );
}

if ( !empty( $_POST ) ) {
  extract( $_POST );

  require 'functions/account_exists.php';

  if ( account_exists() ) {
    require 'functions/account_informations.php';

    $membre = account_informations();
    $_SESSION['id'] = $membre['id'];

    header( 'Location: compte.php' );
  }
  else {
    $erreur = 'Identifiants erronés';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require 'header.php'; ?>
    <div class="container">
      <h1 class="text-xs-center">Connexion</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <?php if ( isset( $erreur ) ) : ?>
            <div class="alert alert-danger"><?= $erreur ?></div>
          <?php endif; ?>
          <form action="connexion.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="<?php if ( isset( $email ) ) echo $email ?>">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            <input type="submit" class="btn btn-success m-b-1" value="Connexion">
            <a href="oubli.php" class="text-success">Mot de passe oublié ?</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
