<?php

/*CECI EST UNE PAGE DE TRAITEMENT PHP*/

try	
	{
		$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
	}
			
catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
	}

	if ($_POST['mdp'] == $_POST['mdpdeux'] )
		{
			$pass = password_hash($_POST['nom'], PASSWORD_DEFAULT);
			$new_auth = $bdd->prepare('INSERT INTO compte(identifiant, passwrd, nom, prenom, mail) VALUES (:id, :mdp, :nom, :prenom, :mail)');
			$new_auth->execute(array(
				'id' => $_POST['identifiant'],
				'mdp' => $_POST['mdp'],
				'nom' => $pass,
				'prenom' => $_POST['prenom'],
				'mail' => $_POST['mail']
				));

	     	header("Location: accueil_societe.php");
	     	exit;
	     }

	else
		{
			?>

			<?php
			header("Location: inscription.php?warning_mdp=triggered");
			exit;
		}
?>