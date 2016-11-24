<?php session_start(); 
	
	$_SESSION['pseudo']="azerty";
	$_SESSION['mot_de_passe']="123";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page de connexion</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script type="script.js"></script>
</head>
<body id="body">
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
	if($_POST['pseudo']==$_SESSION['pseudo'] && $_POST['mot_de_passe']==$_SESSION['mot_de_passe']){
			header ('Location: formulaire.php');
	}else{
		echo "Vérifier vos champs.";
	}
?>