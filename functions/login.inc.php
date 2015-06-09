<?php 
if(isset($_POST['submit-login'])) {

  if(count($_POST)>0){

  $errors = array();

  $username = trim(strip_tags($_POST['username']));
  $password = trim(strip_tags($_POST['password']));
  
  include "config.inc.php";

  // RECUPERATION ET COMPARAISON
      if (!empty($username)){
          // Verification de l'existence 'username'
          $query = $db->query("SELECT * FROM users WHERE username='$username'");
          $query = $query->fetchAll();

          if (empty($query)) { $errors['username'][] = 'This username does not exist'; }
          // L'input est bien rempli ?
        } else { $errors['username'][] = 'A username is required'; }


      if (!empty($password)) {

          // $password = SHA1($password);
          //Vérification de l'existence 'password'
          $query = $db->query("SELECT * FROM users WHERE password='$password'");
          $query = $query->fetchAll();

          if (empty($query)) { $errors['password'][] = 'The password does not match'; }
          // L'input est bien rempli ?
        } else { $errors['password'][] = 'A password is required'; }


      
      if (empty($errors)) { // pas d'erreur ?? 

          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;

          echo '<script>window.location = "logged.php";</script>';
        }
  }
}
?>