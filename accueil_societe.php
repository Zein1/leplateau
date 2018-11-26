<!DOCTYPE html>

<html>

<head>
<?php
	session_start();
?>
<meta charset="utf-8"/>
<title>Accueil Le Plateau</title>
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
	   <button type="button" class="btn btn-red darken-3" id="bouton-principal" data-toggle="modal" data-target="#basicExampleModal">
        Connexion
    </button>

    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="Connexion">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Connexion au Plateau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="authentification.php" method="post" class="formulaire">
                    <div class="modal-body">

                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>



                        <div>

                            <p><label for="name"></label><input type="text" name="name" id="name" placeholder="Identifiant"></p>
                            <div id="error"></div>
                            <p><label for="mdp"></label><input type="password" name="mdp" id="mdp" placeholder="Mot de passe"></p>
							<div id="errordeux"></div>
							
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="inscription.php">
                            <input type="button" class="btn btn-indigo darken-1" id="inscription" value="inscription" />
                        </a>
                        <input type="reset" class="btn btn-stylish-color" id="annuler" value="annuler" data-dismiss="modal"/>
                        <input type="submit" class="btn btn-red darken-3" id="bouton-connexion" value="connexion" />
                </form>
            </div>
        </div>
    </div>
    <?php
    	} 
    ?>

    </div>
	</nav>
	
	<!--PARTIE CENTRALE DERNIERS JEUX SORTIS & COUPS DE COEUR-->
	<section>
		<div class="row">
			<article class="col-lg-6">
				<h2> Dernières sorties </h2>
		<?php 
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
			}

			$query_recent_games = $bdd->query('SELECT nom, image, ID_Jeu FROM jeu ORDER BY ID_Jeu DESC LIMIT 0, 2');

			while ($recent_data = $query_recent_games->fetch())
			{
		?>
				<div class="element_jeu">
					<a href="./details.php?id=<?php echo $recent_data['ID_Jeu'];?>">	
						<h3> <?php echo $recent_data['nom']; ?> </h3>
						<img src="<?php echo $recent_data['image'];?>" alt="paper-tales" height="120" width="130"/>
					</a>
				</div>
		<?php
			}

			$query_recent_games->closeCursor();
		?>
			</article>
				
			<article class="col-lg-6">
				<h2> Les plus populaires </h2>
		<?php
			$query_popular_games = $bdd->query('SELECT jeu.nom, jeu.image, jeu.ID_Jeu, AVG(avis.note) FROM jeu INNER JOIN avis ON jeu.ID_Jeu = avis.ID_Jeu GROUP BY jeu.ID_Jeu ORDER BY AVG(avis.note) DESC LIMIT 0, 2');

			while ($popular_data = $query_popular_games->fetch())
			{
		?>	
				<div class="element_jeu">
					<a href="./details.php?id=<?php echo $popular_data['ID_Jeu'];?>">
						<h3> <?php echo $popular_data['nom']; ?> </h3>
						<img src="<?php echo $popular_data['image'];?>" alt="mysterium" height="120" width="130"/>
						</a>
				</div>
		<?php
			}

			$query_popular_games->closeCursor();
		?>
			</article>
		</div>
	</section>

	<!--FOOTER AVEC MENTION LEGALES, ETC...-->
	<?php include("footer.php");?>

	<!--SCRIPTS JQUERY-->
	<script src="node_modules/jquery/dist/jquery.min.js"> </script>
	<script src="accueil_societe.js"> </script>

</body>

</html>
