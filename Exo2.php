<?php 	
   $file = fopen('Commande.txt', 'r');
/*Si on a réussi à ouvrir le fichier*/
	if ($file)
	{
	   /*On lit la première ligne */
	$ligne = fgets($file);
	/*Tant que l'on est pas à la fin du fichier (la ligne existe) */
	while (!feof($file))
	{   echo $ligne."<br><br>";
		if(strchr($ligne,"CLI1004")){
			$fp = fopen("pscde01_CLI1004.txt","a"); // ouverture du fichieren écriture
			fputs($fp, "\n"); // on va a la ligne
			fputs($fp, $ligne); // on écrit le nom etemail dans le fichier
			fclose($fp);
		}
		elseif (strchr($ligne,"CLI1001")) {
			$fp = fopen("pscde01_CLI1001.txt","a"); // ouverture du fichieren écriture
			fputs($fp, "\n"); // on va a la ligne
			fputs($fp, $ligne); // on écrit le nom etemail dans le fichier
			fclose($fp);
		}
		$ligne = fgets($file);
	}}
fclose($file);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exo2</title>
</head>
<body>

</body>
</html>