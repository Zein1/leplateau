<!DOCTYPE html>

<html>

<head>
<?php
session_start();
?>
<meta charset="utf-8"/>
<title>Details</title>
<meta name="description" content="Le plateau note les jeux de sociétés récents et anciens."/>
<link rel="icon" type="image/png" href="image/logoonglet.png"/>

<link href="jquery_bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
<script type="application/javascript" src="jquery_bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="jquery_bootstrap/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="accueil_societe.css">

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

	<!--NAVBAR-->
	<?php include("nav.php"); ?>

		<!--BOUTON CONNEXION-->
		<?php
	if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
		echo '<p id="bonjour">'.$_SESSION['pseudo'];
	    echo '<a href="logout.php"><img id="power" src="image\power-button-155491_960_720.png"></a>';
	} else {
	?>
	   <!-- Button trigger modal -->
	<button type="button" class="btn btn-red darken-3" id="bouton-principal" data-toggle="modal" data-target="#basicExampleModal"> Connexion </button>      
	<!-- Modal -->
	<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content" id="Connexion">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Connexion au Plateau</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">                
           	<form class="oui">
           	  <p><input type="text" name="identifiant" placeholder="Identifiant"></p>
           	  <p><input type="password" name="mdp" placeholder="Mot de passe"></p>                
           	</form>
           	</div>

           <div class="modal-footer">
             <button type="button" class="btn btn-stylish-color" id="annuler" data-dismiss="modal">Annuler</button>
             <button type="button" class="btn btn-red darken-3" id="bouton-connexion">Connexion</button>
           </div>
         </div>
       </div>
        <?php
    	}
    	?>
     </div>
	</nav>
	
		<?php 
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
			}

			$query_game = $bdd->query('SELECT nom, prix, nbMinJoueurs, nbMaxJoueurs, noteRedac, catégorie, testRedac, description, image FROM jeu WHERE ID_Jeu = '.$_GET["id"]);

			while ($recent_data = $query_game->fetch())
			{
		?>	



	<!--PARTIE CENTRALE DETAILS JEUX -->

	<section>
		<div class="row">
			<article class="col-lg-12">
				<h2>
					<?php echo $recent_data['nom']; ?>
				</h2>
			</article>	
		</div>
		<div class="row">
			<article class="col-lg-2">
			</article>
			<article class="col-lg-4">
				<br/><br/>
					<img src="<?php echo $recent_data['image'];?>" alt="<?php echo $recent_data['nom'];?>" height="300" width="320"/>
			</article>
			<article class="col-lg-4">
				<br/><br/><br/>
				<p>Catégorie : <?php echo $recent_data['catégorie']; ?> <br/>
				de <?php echo $recent_data['nbMinJoueurs']; ?> à <?php echo $recent_data['nbMaxJoueurs']; ?> Joueurs <br/>
				Prix : <?php echo $recent_data['prix']; ?> Euros <br/>
				Note de la redac : <?php echo $recent_data['noteRedac']; ?>/5 <br/> <br/>
				<i>"<?php echo $recent_data['description']; ?>"</i>
				</p>
			</article>
			<article class="col-lg-2">
			</article>
		</div>
		<div class="row">
			<article class="col-lg-2">
			</article>
			<article class="col-lg-8">
				<p>
					<br/><br/>
					<?php echo $recent_data['testRedac']; ?>
				</p>
			</article>
			<article class="col-lg-2">
			</article>
		</div>
		<?php
			}

			$query_game->closeCursor();
		?>
	</section>

	<!--CREATION AVIS UTILISATEUR-->
	<section>
	<h2> Laissez votre avis ! </h2>
		<form method="post" action="traitement_avis.php">
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
			<input id="id_avis_jeu" name="id_avis_jeu" type="hidden" value="<?php echo $_GET['id'];?>">
			<input type="submit" value="Envoyer">
		</form>
	</section>

	<!--LECTURE AVIS UTILISATEURS-->

	<section>
		<?php
		$query_user_desc = $bdd->prepare('SELECT avis.ID_Compte, avis.ID_jeu, avis.description, avis.note, compte.identifiant FROM avis INNER JOIN compte ON avis.ID_Compte = compte.ID_Compte WHERE avis.ID_Jeu = ? ORDER BY avis.ID_Compte DESC');
			$query_user_desc->execute(array($_GET["id"]));

				while ($user_desc = $query_user_desc->fetch())
				{
		?>

		<div class="user_desc">
			<h3> <?php echo $user_desc['identifiant'];?> </h3>
				<p> <?php echo $user_desc['description'];?> </p>
				<p> <?php echo $user_desc['note'];?> / 5 </p>
		</div>

		<?php
				}

				$query_user_desc->closeCursor();
		?>
	</section>

	<!--FOOTER AVEC MENTION LEGALES, ETC...-->
	<?php include("footer.php"); ?>

	<!--SCRIPTS JQUERY-->
	<script src="node_modules/jquery/dist/jquery.min.js"> </script>
	<script src="accueil_societe.js"> </script>

</body>
</html> 