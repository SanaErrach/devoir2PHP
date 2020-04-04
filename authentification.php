<?php
 
 function validPass($pass){
    $valid=true; 

    if(strlen($pass)<8){
      echo'<br><p style="color:red">Le mot de pass doit etre plus de 8 caracteres!';
      $valid=false; 
    }
    if(!preg_match('@[^\w]@', $pass)){
      echo '<br><p style="color:red">le mot de passe doit contenir au moins un caratere special';
      $valid=false; 
    }
    if (!preg_match('@[A-Z]@', $pass)) {
      echo '<br><p style="color:red"> mot de passe doit contenir au moins une lettre majuscule';
      $valid=false; 
    }
    if (!preg_match('@[0-9]@', $pass)) {
      echo'<br><p style="color:red">le mot de passe doit contenir au moins un chiffre';
      $valid=false; 
    }
    return $valid; 
  }
 function validEmail($user){
  $valid=true;
  //la forme tata@cocomail.com  est valide
  if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
      echo '<br><p style="color:red">Invalid Email';
      $valid=false; 
   
    } }
 function addToFile($user,$pass){
  $fp = fopen("login.txt","a"); // ouverture du fichieren écriture
      fputs($fp, "\n"); // on va a la ligne
      fputs($fp, $user."|".$pass); // on écrit le nom etemail dans le fichier
      fclose($fp);
 }
 function checkFile($user,$pass){
  if(validEmail($user)||validPass($pass)){
  $file = fopen('login.txt', 'r');
  if ($file)
  {
  $ligne = fgets($file);
  /*Tant que l'on est pas à la fin du fichier (la ligne existe) */
  while (!feof($file))
  { 
    if(strchr($ligne,$user)){
      list($username,$password)=explode('|',$ligne);
      fclose($file);
      if(!strchr($password,$pass)){
        echo '<br><p style="color:red">password incorrect';
      }else{
        echo '<br><p style="color:red">Bienvenue';
      }
      break;
    }
  }
 

}

}}

   
      
?>