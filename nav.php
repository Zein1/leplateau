       <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <img src="image/jeurouge.png" alt="logo" id="accueil_logo" height="60" width="65" class="navbar-brand">
    <a href="accueil_societe.php" class="nav-link" id="retour_accueil"><h1 class="nav-item">Le Plateau</h1></a>
        <div class="hamburger" id="myHamburger">
      <ul class="navbar-nav">
      <a href="index_societe.php?chosen_categorie=cartes" class="nav-link" id="cartes"><li class="nav-item">Cartes</li></a>
      <a href="index_societe.php?chosen_categorie=ambiance" class="nav-link" id="ambiance"><li class="nav-item">Ambiance</li></a>
      <a href="index_societe.php?chosen_categorie=strategie" class="nav-link" id="strategie"><li class="nav-item">Stratégie</li></a>
      <a href="index_societe.php?chosen_categorie=adresse" class="nav-link" id="adresse"><li class="nav-item">Adresse</li></a>
      <a href="index_societe.php?chosen_categorie=nouveau" class="nav-link" id="nouveautes"><li class="nav-item">Nouveautés</li></a>
      <a href="index_societe.php?chosen_categorie=coeur" class="nav-link" id="coeur"><li class="nav-item">Coups de coeur</li></a>
    </ul>
        </div>
        <a href="javascript:void(0);" class="nav-link ham_icon" onclick="display_hamburger()">&#9776;</a>
  <form action="index_societe.php" method="post" class="form-inline">
  <div class="form-group">
    <input type="search" id="rechercher" name="rechercher" placeholder="Rechercher..."> 
    <button type="submit"><img src="image/loupe.jpg" alt="search" width="20px" height="20px" class="rechercher"></button>
  </div>
  </form>