<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="index.php">monsite.dev</a>
        <ul class="nav navbar-nav pull-xs-right">
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compte.php">Compte</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container profil">
      <h1 class="text-xs-center">Mon Compte</h1>
      <div class="row">
        <div class="col-md-4 col-lg-3 col-sm-5">
          <h2 class="text-xs-center">Changer d'image</h2>
          <img src="img/default-profile.png" alt="image de profil" class="img-circle">
          <form action="profil.php" method="post" enctype="multipart/form-data">
            <input type="file" name="profil" class="form-control-file">
            <input type="submit" class="btn btn-success" value="Changer d'image">
          </form>
        </div>
        <div class="col-lg-offset-1 col-lg-8 col-md-8 col-sm-7">
          <h2 class="text-xs-center">Changer de mot de passe</h2>
          <form action="password.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Ancien mot de passe">
            <input type="password" name="password" class="form-control" placeholder="Nouveau mot de passe">
            <input type="password" name="passwordconf" class="form-control" placeholder="Confirmez le nouveau mot de passe">
            <input type="submit" class="btn btn-success" value="Changer de mot de passe">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
