<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>
<title>Accueil Le Plateau</title>
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
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
   	<img src="image/jeurouge.png" alt="logo" height="60" width="65" class="navbar-brand">
   	<h1 class="nav-item">Le Plateau</h1>
   		<ul class="navbar-nav">
			<a href="algo_categories_societe.php?chosen_categorie=cartes" class="nav-link"><li class="nav-item">Cartes</li></a>
			<a href="algo_categories_societe.php?chosen_categorie=ambiance" class="nav-link"><li class="nav-item">Ambiance</li></a>
			<a href="algo_categories_societe.php?chosen_categorie=strategie" class="nav-link"><li class="nav-item">Stratégie</li></a>
			<a href="algo_categories_societe.php?chosen_categorie=adresse" class="nav-link"><li class="nav-item">Adresse</li></a>
			<a href="algo_categories_societe.php?chosen_categorie=nouveau" class="nav-link"><li class="nav-item">Nouveautés</li></a>
			<a href="algo_categories_societe.php?chosen_categorie=coeur" class="nav-link"><li class="nav-item">Coups de coeur</li></a>
		</ul>
	<form class="form-inline">
		<input type="text" action="algo_categories_societe" id="rechercher" name="rechercher" placeholder="Rechercher..."> 
	</form>

		<!--BOUTON CONNEXION-->
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

			$query_recent_games = $bdd->query('SELECT nom, image FROM jeu ORDER BY ID_Jeu DESC LIMIT 0, 2');

			while ($recent_data = $query_recent_games->fetch())
			{
		?>
					<a href="#">
						<h3> <?php echo $recent_data['nom']; ?> </h3>
						<img src="<?php echo $recent_data['image'];?>" alt="paper-tales" height="120" width="130"/>
					</a>
		<?php
			}

			$query_recent_games->closeCursor();
		?>
			</article>
				
			<article class="col-lg-6">
				<h2> Les plus populaires </h2>
		<?php
			$query_popular_games = $bdd->query('SELECT jeu.nom, jeu.image, AVG(avis.note) FROM jeu INNER JOIN avis ON jeu.ID_Jeu = avis.ID_Jeu GROUP BY jeu.ID_Jeu ORDER BY AVG(avis.note) DESC LIMIT 0, 2');

			while ($popular_data = $query_popular_games->fetch())
			{
		?>	
					<a href="#">
						<h3> <?php echo $popular_data['nom']; ?> </h3>
						<img src="<?php echo $popular_data['image'];?>" alt="mysterium" height="120" width="130"/>
						</a>
		<?php
			}

			$query_popular_games->closeCursor();
		?>
			</article>
		</div>
	</section>

	<!--FOOTER AVEC MENTION LEGALES, ETC...-->
	<footer>Copyright © 2018 leplateau.com - <a href="#">Mentions légales</a> - <a href="#">Conditions générales de vente</a> - <a href="#">Contactez-nous</a></footer>

</body>

</html>
