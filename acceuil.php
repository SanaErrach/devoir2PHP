<?php
 
  require 'authentification.php';
  if (isset($_POST['submit'])) {
    $user=$_POST['user']; 
    $pass=$_POST['pass']; 
    $error=""; 
    $success=""; 
    if(!validPass($pass)){
      $error="password invalid"; 
      $success="";
    }
    if (!validEmail($user)) {
      $error="Invalid Email";
      $success="";
    }
    addToFile($user,$pass); 
    checkFile($user,$pass);
  }
   
      
?>
<!DOCTYPE html>
<html>
<head>
  <title>Exo4</title>
  <meta charset="utf-8">

 

</head>
<body>
  <center>
    <h2 style="color: #B75844"> login</h2><br><br>
    <form method="POST" action="">     
      <input type="text"  name="user" value="" placeholder="Email Address" required=""/>
      <input type="password" name="pass" value="" placeholder="Password" required=""/>      
      <input type="submit" name="submit" value="login">   
    </form>
  </center>
  </div>
</body>
</html>