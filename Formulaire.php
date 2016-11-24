<!doctype htlm>
<html lang="fr">
<?php


	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');
	$heure = date('H');
	$minute = date('i');
?>


<head>
	<meta charset="utf-8">
	<title>BLOG</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script type="script.js"></script>
	<h1 id="titre">Blog</h1>
</head>

	<body id="body">
		<form action="#" method="POST"> 
	<p>
		<br/>
			<h2 id="petittittre"><label for="Titre">Titre :
							<?php
							 	if (isset($_POST['Titre'])){
							 		echo ''.htmlspecialchars($_POST['Titre']);
							 	}
							 ?></h2>

			<label for="Pseudo">Pseudo : 
							 <?php
							 	if (isset($_POST['Pseudo'])){
							 		echo ''.htmlspecialchars($_POST['Pseudo']);
							 	}
							 ?>
			
			<br/>
			<label for="Date">
			 				 <?php
							 	echo'Date de publication: ' .$jour .'/' .$mois .'/' .$annee .' ';
							 ?>
			
			<br/>
			<label for="Message">Message :
			 				<?php
							 	if (isset($_POST['Message'])){
							 		echo ''.htmlspecialchars($_POST['Message']);
							 	}
						 	?>
	</p> 
	</form>
	</body>
	<footer id="piedpage">
		<div id=bas></div>
		<h2 id="petittittre">Formulaire</h2>
		 <label for="Titre">Titre :   </label></label><textarea name="Titre"></textarea>
		<br/>
		 <label for="Pseudo">Pseudo :  </label></label><textarea name="Pseudo"></textarea>
		<br/>
		 <label for="Message">Message : </label><textarea rows="8" cols"45" name="Message"></textarea>
		<br/>
		 <label for="Date">
							<?php

							echo'Date de publication: ' .$jour .'/' .$mois .'/' .$annee .' ' .$heure .'h' .$minute;

							?>
		<br/>
		<br/>
		 <input type="submit" value="Publier" id=bouton>
	</footer>

<?php
	
	$monfichier = fopen('traitement.txt', 'a+');

	$ligne = fgets($monfichier);
	fputs($monfichier, '<p>'.htmlspecialchars($_POST['Titre']) .'<br/>'.htmlspecialchars($_POST['Pseudo']) .'<br/>'.htmlspecialchars($_POST['Message']) .'</p>');

	fclose($monfichier);

	$monfichier = fopen('traitement.txt', 'r');
	$contenue = fgets($monfichier);

	echo $contenue;


?>