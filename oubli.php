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
    <div class="container">
      <h1 class="text-xs-center">Mot de passe oublié</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <form action="oubli.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail de votre compte">
            <input type="submit" class="btn btn-success" value="Soumettre">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
