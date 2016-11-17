<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page de connexion</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script type="script.js"></script>
</head>
<body>
	<form action="#" method="POST">
    Pseudo: <input type="text" name="pseudo" value="" />
     
    Mot de passe: <input type="password" name="mot_de_passe" value="" />
     
    <input type="submit" name="connexion" value="Connexion" />
	</form>
	<br />
	<br />
</body>
</html>


<?php

	if(isset($_POST['connexion'])){
		/*if(empty($_POST['pseudo'])) {
        echo "Le champ Pseudo est vide.";
    } else {
		if(empty($_POST['mot_de_passe'])) {
		echo "Le champ Mot de passe est vide.";
	} else {*/
		if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "123" AND isset($_POST['pseudo']) AND $_POST['pseudo'] == "azerty"){
	    	echo "Test";
		}else{
			echo "Vérifier vos champs";
			}
		}
	//}
//}

?>