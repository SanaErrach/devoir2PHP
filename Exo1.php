
//Créer une fonction qui prend en paramètre une chaîne $string et un délimiteur $car. La
fonction aura comme tâche de couper la chaîne en utilisant le délimiteur et renvoie le
résultat sous forme d'un tableau.



<?php 
 $string='val1,val2,val3,val4';
 $car=',';



 function decoupeChaine($string,$car){
 	list($nom,$prenom,$age,$ville)=explode($car,$string); 
 	 echo '<td>'.$nom.'</td><td>'.$prenom.'</td><td>'.$age.'</td><td>'.$ville.'</td>';
 }


?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title>Exo1</title>
	
<body>
	<center><table class="table" style="border: 1px solid black; width: 50%;margin-top: 50px;">
		  <thead>
		    <tr>
		      <th scope="col">Nom</th>
		      <th scope="col">Prénom</th>
		      <th scope="col">Age</th>
		      <th scope="col">Ville</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		     
          <?php decoupeChaine("Er-rachedy,Sana,21ans,Agadir",",") ?>
		    </tr>
		    </tbody>
		</table>';
	
</center>
</head>
</body>
</html>