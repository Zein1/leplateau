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

	<!--navbar-->
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

	
    </nav>
    
    <div class="row">
        <div class="col-lg-12">
    <form class="inscription">
        
            <p><label for="nom"></label><input type="text" class="taille_input_inscription" name="nom" id="nom" placeholder="Nom" ></p>
            <p><label for="prenom"></label><input type="text" class="taille_input_inscription" name="prenom" id="prenom" placeholder="Prenom" ></p>
            <p><label for="identifiant"></label><input type="text" class="taille_input_inscription" name="identifiant" id="identifiant" placeholder="Identifiant"></p>
            <div id="error"></div>
            <p><label for="mdp"></label><input type="password" class="taille_input_inscription" name="mdp" id="mdp" placeholder="Mot de passe" ></p>
            <div id="errordeux"></div>
            <p><label for="mdpdeux"></label><input type="text" class="taille_input_inscription" name="mdpdeux" id="mdpdeux" placeholder="Confirmation du mdp"></p>
            <p><label for="mail"></label><input type="text" class="taille_input_inscription" name="mail" id="mail" placeholder="Email" ></p>
            <input type="submit" class="btn btn-red darken-3" id="bouton-connexion" value="Inscription" />
    </form>
        </div>
    </div>

    <div class="image">
        <img src="image/arrivage-mars-avril-2014.jpg">
    </div>

    
	<footer>Copyright © 2018 leplateau.com - <a href="#">Mentions légales</a> - <a href="#">Conditions générales de vente</a> - <a href="#">Contactez-nous</a></footer>

</body>

</html>