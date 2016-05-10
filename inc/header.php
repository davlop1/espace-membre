<nav class="navbar navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="index.php">monsite.dev</a>
    <ul class="nav navbar-nav pull-xs-right text-xs-center">
      <?php
      if ( isset( $_SESSION['id'] ) ) :
      ?>
      <li class="nav-item">
        <a class="nav-link" href="compte.php">Compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="deconnexion.php">Déconnexion</a>
      </li>
      <?php
      else :
      ?>
      <li class="nav-item">
        <a class="nav-link" href="inscription.php">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
      </li>
      <?php
      endif;
      ?>
    </ul>
  </div>
</nav>
