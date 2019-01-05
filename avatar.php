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
    <nav class="navbar navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="index.php">monsite.dev</a>
        <ul class="nav navbar-nav pull-xs-right text-xs-center">
          <li class="nav-item">
            <a class="nav-link" href="compte.php">Compte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deconnexion.php">Déconnexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">Connexion</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container profil">
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <h1 class="text-xs-center">Changer d'avatar</h2>
          <div class="center-block">
            <img src="" alt="avatar" class="img-circle img-fluid">
          </div>
          <form action="avatar.php" method="post" enctype="multipart/form-data" class="p-y-3 p-x-2">
            <input type="file" name="avatar" class="form-control-file">
            <input type="submit" class="btn btn-success" value="Changer d'avatar">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
