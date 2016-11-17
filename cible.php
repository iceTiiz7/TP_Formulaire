<?php
	if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['CaseF']) OR isset($_POST['caseH']))
	{
		echo '<strong>JE sais comment tu t\'appelles, tu t\'appelles : </strong>' 
		.htmlspecialchars($_POST['prenom']). " " .htmlspecialchars($_POST['nom']);
		echo '<br/>';
		echo '<br/>';

		if(isset($_POST['caseF'])){

			echo 'Tu est une femme';

		}else if(isset($_POST['caseH'])){

			echo 'Tu est un homme';
	}

}else{

	echo 'Il faut renseigner un nom et un prénom!';
}

	print_r($_POST);
	echo '<br/>';

	unset($_POST['nom']);
	unset($_POST['prenom']);
	unset($_POST['caseF']);
	unset($_POST['caseH']);

?>