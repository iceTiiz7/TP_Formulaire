<!DOCTYPE html>
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
        <title>Blog</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		<script type="script.js"></script>
		<h1 id="titre">Blog</h1>
    </head>

    <body id="body">
        <header>
                <?php
                    
                    if (isset($_POST['Pseudo']) and isset($_POST['Titre']) and isset($_POST['Message']) and !empty($_POST['Pseudo']) and !empty($_POST['Titre']) and !empty($_POST['Message'])){
                        
                        
                        $f = fopen("traitement.txt", "a+"); 
                        
                        fputs($f,'<p>Pseudo: '.htmlspecialchars($_POST["Pseudo"]).'<br>Titre: '.htmlspecialchars($_POST["Titre"]).
                              '<br>Message: '.htmlspecialchars($_POST["Message"]).'</p>'); 
                        fclose($f);
                    }
                    
                    
                   $f = fopen("traitement.txt", "r"); 
                    $ligne = fgets($f);
                
                    echo $ligne; 

                ?>
        </header>
        
        <footer>
            <form action="" method="POST">
                <p id="piedpage">
                    <label for="Pseudo">Pseudo: </label><input type="text" name="Pseudo" />
                    <br/>
                    <br/>
                    <label for="Titre">Titre: </label><input type="text" name="Titre" />
                    <br/>
                    <br/>
                    <label for="TextArea">Message: </label><br/><textarea rows="4" cols="50" name="Message"></textarea>
                    <br/>
                    <br/>
                    <label for="Date">
			 				 <?php
							 	echo'Date de publication: ' .$jour .'/' .$mois .'/' .$annee .' ';
							 ?>
					<br/>
                    <br/>
                    <input type="submit" value="Publier"/>
                </p>
            </form>
        </footer>
    </body>
</html>