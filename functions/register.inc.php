<?php
if(isset($_POST['submit-register'])){

  if(count($_POST)>0){

    $errors = array();

    $username = trim(strip_tags($_POST['username']));
    $password = trim(strip_tags($_POST['password']));

    include "config.inc.php";
    
    if(empty($username)){ // si input n'est pas rempli...
        $errors['username'][] = 'A username is required';
    }else{ // username disponible ??
       $query = $db->query("SELECT * FROM users WHERE username='$username'");
       $query = $query->fetchAll();
       if (!empty($query)){
          $errors['username'][] = 'This username has already been taken';
       }
    }

    if(!empty($password)){ // si input n'est pas rempli...  
      if(strlen($password)>4){ // minimum 5 lettres pour le password
      }else{
        $errors['password'][] = 'A password requires a minimum of 5 characters';
      }
    }else {
      $errors['password'][] = 'A password is required';
    }


    
    if(empty($errors)){ // pas d'erreur ?? 

                $db->query("INSERT INTO users(username,password)
                            VALUES ('$username','$password')");

                
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;

          echo '<script>window.location = "logged.php";</script>';

    }      
  }
}
?>