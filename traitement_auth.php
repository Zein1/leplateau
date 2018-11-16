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

		$bdd->exec('INSERT INTO compte(ID_Compte, identifiant, passwrd, nom, prenom, mail) VALUES(\'\', \'$_POST["identifiant"]\', \'$_POST["mdp"]\', \'$_POST["nom"]\', \'$_POST["prenom"]\', \'$_POST["mail"]\')');

     	header("Location: accueil_societe.php");
     	exit;
?>