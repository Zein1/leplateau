﻿<!DOCTYPE html>

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
	
		<?php 
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=leplateau;charset=utf8', 'root', '');	// On se connecte à MySQL
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());		// En cas d'erreur, on affiche un message et on arrête tout
			}

			$query_game = $bdd->query('SELECT nom, prix, nbMinJoueurs, nbMaxJoueurs, noteRedac, catégorie, image FROM jeu WHERE ID_Jeu = 3');

			while ($recent_data = $query_game->fetch())
			{
		?>	



	<!--PARTIE CENTRALE DERNIERS JEUX SORTIS & COUPS DE COEUR-->

	<section>
		<div class="row">
			<article class="col-lg-12">
				<h2>
					<?php echo $recent_data['nom']; ?>
				</h2>
			</article>	
		</div>
		<div class="row">
			<article class="col-lg-4">
				<br/><br/>
					<img src="<?php echo $recent_data['image'];?>" alt="<?php echo $recent_data['nom'];?>" height="480" width="520"/>
			</article>
			<article class="col-lg-8">
				<p>Catégorie : <?php echo $recent_data['catégorie']; ?> <br/> <br/>
				C'est <?php echo $recent_data['nom']; ?> <br/> 
				de <?php echo $recent_data['nbMinJoueurs']; ?> à <?php echo $recent_data['nbMaxJoueurs']; ?> Joueurs <br/>
				Prix : <?php echo $recent_data['prix']; ?> Euros <br/>
				Note de la redac : <?php echo $recent_data['noteRedac']; ?>/5
				</p>
			</article>
		</div>
		<?php
			}

			$query_game->closeCursor();
		?>
	</section>
	<!--placeholder requete PHP jeux récents-->
	<!--placeholder requete PHP jeux + aimés-->

	<!--FOOTER AVEC MENTION LEGALES, ETC...-->
	<footer>Copyright © 2018 leplateau.com - <a href="#">Mentions légales</a> - <a href="#">Conditions générales de vente</a> - <a href="#">Contactez-nous</a></footer>
</body>
</html> 