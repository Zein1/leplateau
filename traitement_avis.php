<?php

/*CETTE PAGE INSERE UN AVIS UTILISATEUR DANS LA BDD*/

try	
	{
		$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
	}
			
catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
	}

	if (strlen($_POST['avis']) > 0)
		{
			$new_avis = $bdd->prepare('INSERT INTO avis(ID_Compte, ID_Jeu, description, note) VALUES (:idcompte, :idjeu, :description, :note)');
			$new_avis->execute(array(
				'idcompte' => 1,
				'idjeu' => 4,
				'description' => $_POST['avis'],
				'note' => $_POST['note'],
				));

	     	header("Location: morceau_code_avis.php");
	     	exit;
	     }

	else
		{
			?>

			<?php
			header("Location: morceau_code_avis.php");
			exit;
		}
?>