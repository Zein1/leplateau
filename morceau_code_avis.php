<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>C/C requete avis utilisateur</title>
	</head>

	<body>

		<h2> Laissez un avis ! </h2>
		<form action="avis.php">
			<textarea rows="4" cols="50"> </textarea>
		</form>

		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
			}

			$query_user_desc = $bdd->query('SELECT avis.ID_Compte, avis.ID_jeu, avis.description, avis.note, compte.prenom FROM avis INNER JOIN compte ON avis.ID_Compte = compte.ID_Compte ORDER BY avis.ID_Compte DESC');

				while ($user_desc = $query_user_desc->fetch())
				{
		?>

		<div class="user_desc">
			<h3> <?php echo $user_desc['prenom'];?> </h3>
				<p> <?php echo $user_desc['description'];?> </p>
				<p> <?php echo $user_desc['note'];?> / 5 </p>
		</div>

		<?php
				}

				$query_user_desc->closeCursor();
		?>

	</body>
</html>