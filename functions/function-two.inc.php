<?php
function error_messt($errors, $input){
  if(count($_POST)>0){
    $message = '';
    if(count($errors[$input])>0){
      foreach($errors[$input] as $e){
        $message = $message.$e;
      }
    }
    return '<p class="error-lol">'.$message.'</p>';
  }
}
?>