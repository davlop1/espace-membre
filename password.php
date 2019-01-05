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
      <h1 class="text-xs-center">Changer de mot de passe</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
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
