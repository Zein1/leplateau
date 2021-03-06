<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>
<title>Inscription au Plateau</title>
<meta name="description" content="Le plateau note les jeux de sociétés récents et anciens."/>
<link rel="icon" type="image/png" href="image/logoonglet.png"/>

<link href="jquery_bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
<script type="application/javascript" src="jquery_bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="jquery_bootstrap/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="accueil_societe.css">
<script src="inscription.js"></script>

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
    <?php include("nav.php"); ?>
    </nav>
    
    <div class="row page_inscription">

        <div class="col-lg-6" id="div_image_inscription">
            <img src="image/arrivage-mars-avril-2014.jpg" id="image_inscription">
        </div>

        <div  class="col-lg-5" id="div_formulaire_inscription">
        <form action="traitement_auth.php" method="post" class="inscription">
        
            <p><label for="nom"></label><input type="text" class="taille_input_inscription" name="nom" id="nom" placeholder="Nom" ></p>
            <div id="error_nom"></div>
            <p><label for="prenom"></label><input type="text" class="taille_input_inscription" name="prenom" id="prenom" placeholder="Prenom" ></p>
            <div id="error_prenom"></div>
            <p><label for="identifiant"></label><input type="text" class="taille_input_inscription" name="identifiant" id="identifiant" placeholder="Identifiant"></p>
            <div id="error_identifiant"></div>
            <p><label for="mdp"></label><input type="password" class="taille_input_inscription" name="mdp" id="mdp" placeholder="Mot de passe" ></p>
            <div id="error_mdp"></div>
            <p><label for="mdpdeux"></label><input type="password" class="taille_input_inscription" name="mdpdeux" id="mdpdeux" placeholder="Confirmation du mdp"></p>
            <div id="error_mdpdeux"></div>
            <p><label for="mail"></label><input type="text" class="taille_input_inscription" name="mail" id="mail" placeholder="Email" ></p>
            <div id="error_mail"></div>
            <input type="submit" class="btn btn-red darken-3" id="bouton-connexion" value="Inscription" />
        </form>
        </div>
    </div>
    
    <?php include("footer.php"); ?>

    <!--MESSAGE D'ERREUR EN CAS DE MDP DIFFERENTS-->

    <?php
        if (!empty($_GET["warning_mdp"]) && $_GET["warning_mdp"] == "triggered")
        {
    ?>
    <script> 
        alert("Veuillez entrer deux mots de passe identiques."); 
    </script>
    <?php
        }
    ?>

    <!--SCRIPTS JQUERY-->
    <script src="node_modules/jquery/dist/jquery.min.js"> </script>
    <script src="accueil_societe.js"> </script>

</body>

</html>