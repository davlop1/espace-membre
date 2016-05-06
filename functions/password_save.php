<?php
function password_save( string $password = '' ) {
  $newpassword = $_POST['newpassword'] ?? $password;

  // On enregistre le nouveau password en BDD
}
