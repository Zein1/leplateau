<?php

session_start();

/*CETTE PAGE INSERE UN AVIS UTILISATEUR DANS LA BDD*/

try	
	{
		$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
	}
			
catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
	}

	if (!empty($_POST['avis']) && strlen($_POST['avis']) < 501)
		{
			$new_avis = $bdd->prepare('INSERT INTO avis(ID_Compte, ID_Jeu, description, note) VALUES (:idcompte, :idjeu, :description, :note)');
			$new_avis->execute(array(
				'idcompte' => $_SESSION['id'],
				'idjeu' => $_POST['id_avis_jeu'],
				'description' => $_POST['avis'],
				'note' => $_POST['note']
				));

	     	header("Location: details.php?id=".$_POST['id_avis_jeu']);
	     	exit;
	     }

	else
		{
			header("Location: details.php?id=".$_POST['id_avis_jeu']);
			exit;
		}
?>