<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>
<title>Authentification</title>
<meta name="description" content="Le plateau note les jeux de sociétés récents et anciens."/>
<link rel="icon" type="image/png" href="image/logoonglet.png"/>

<link href="jquery_bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
<script type="application/javascript" src="jquery_bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="jquery_bootstrap/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="accueil_societe.css">
<script src="connexion.js"></script>

<!--mdbootstrap-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
<!--mdbootstrap-->

</head>

<body>

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
			$new_auth = $bdd->prepare('INSERT INTO compte(identifiant, passwrd, nom, prenom, mail) VALUES (:id, :mdp, :nom, :prenom, :mail)');
			$new_auth->execute(array(
				'id' => $_POST['identifiant'],
				'mdp' => $_POST['mdp'],
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'mail' => $_POST['mail']
				));

	     	header("Location: accueil_societe.php");
	     	exit;
	     }

	else
		{
			?>

			<script> alert("Les mots de passes ne sont pas identiques !"); </script>

			<?php
			header("Location: inscription.php");
			exit;
		}
?>

</body>

</html>