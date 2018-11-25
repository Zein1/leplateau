<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>C/C requete avis utilisateur</title>
	</head>

	<body>

		<h2> Laissez un avis ! </h2>
		<form action="traitement_avis.php?id=$_GET['id']">
			<textarea name="avis" id="avis" rows="4" cols="50"> </textarea> <br/>
			<label for="note"> Note: </label>
				<select name="note" id="note">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			<br/>
			<input type="submit" value="Envoyer">
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

			$query_user_desc = $bdd->prepare('SELECT avis.ID_Compte, avis.ID_jeu, avis.description, avis.note, compte.prenom FROM avis INNER JOIN compte ON avis.ID_Compte = compte.ID_Compte WHERE avis.ID_Jeu = ? ORDER BY avis.ID_Compte DESC');
			$query_user_desc->execute(array($_GET["id"]));

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