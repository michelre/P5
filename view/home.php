<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/leaflet.css">
    <link rel="stylesheet" href="public/css/leaflet-gesture-handling.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Ta Destination Surf</title>
</head>

<body>

	<header>
    <div class="row">
        <nav class="navbar">
            <div class="title col-lg-6">
            	<a href="http://voyagesetsurf.com/"><img class="img-fluid" src="public/images/logo.png" alt="logo"></a>
            </div>
            <div class="dropdown col-lg-6 col-xs-1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Menu
                </button>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="*">Accueil</a>
                    
                </div>
                </div>
        </nav>
    </div>
</header>

<div class="container">
	<div class="row">
	    <!-- Contient l'image et la description -->
	    <div class="carousel-inner">
	        <img class="img-fluid" src="public/images/slider1.jpg" alt="First slide">
	        <!-- Description slider 1 -->	        
	            <div class="carousel-caption">
	                <h1 class="style_title">Bienvenue sur le blog de Voyages et Surf !</h1>
	                <p class="style_texte">Rempli le formulaire et découvre la destination surf faite pour toi !</p>
	            </div>
	    </div>
	</div>
</div>

<div class="container">

<h2>Formulaire</h2>
	<div id="budgets">
					<?php
					foreach($budgets as $budget){
						?>
						<div class="budget"><?php echo $budget->getValeur();?></div>
					<?php
				}
					?>
	</div>

	<div id="niveaux">
					<?php
					foreach($niveaux as $niveau){
						?>
						<div class="niveau"><?php echo $niveau->getValeur();?></div>
					<?php
				}
					?>
	</div>

		<div id="saisons">
					<?php
					foreach($saisons as $saison){
						?>
						<div class="saison"><?php echo $saison->getMois();?></div>
					<?php
				}
					?>
	</div>
<br>
	<form action="" method="post" enctype="text/plain">
	  <label>Budget: <br>
	  	<input type="radio" name="nom_variable_1" value="choix1"> 

	  		Les fins de mois sont chauds, je veux dépenser le moins possible <br>
	  	<input type="radio" name="nom_variable_1" value="choix2"> 
	  		Mon père n'est pas Rothschild mais ça va j'ai un peu d'économie <br>
	  	<input type="radio" name="nom_variable_1" value="choix3"> 
	  		Je veux me faire plaisir <br>
	  </label>
<br>
	  <label>Niveau: <br>
	  	<input type="radio" name="nom_variable_1" value="choix1"> 
	  		Débutant <br>
	  	<input type="radio" name="nom_variable_1" value="choix2"> 
	  		Intermédiaire <br>
	  	<input type="radio" name="nom_variable_1" value="choix3"> 
	  		Expert <br>
	  </label>
	  	<br> 
	  	<label>Saison: <br>
	  	<input type="radio" name="nom_variable_1" value="choix1"> 
	  		Janvier <br>
	  	<input type="radio" name="nom_variable_1" value="choix2"> 
	  		Février <br>
	  	<input type="radio" name="nom_variable_1" value="choix3"> 
	  		Mars <br>
	  </label>
	  	<br> 
	  <button type="submit" value="BouttonSubmit" name="expedier email">Voir la destination</button>

	</form>
</div>

<div class="container">

<div id="map"></div>

<h2>Carte</h2>	
	<br> 
	 <img class="img-fluid" src="public/images/map.png" alt="map">
</div>

<footer>
		<p><a href="http://voyagesetsurf.com/"> 2019 Voyages et Surf</a> -
			<a href="index.php?action=login">Espace Administrateur</a>
		</p>
	</footer>

<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/leaflet.js"></script>
<script src="js/lib/leaflet-gesture-handling.min.js"></script>
<script src="js/Carte.js"></script>
<script src="js/index.js"></script>



</body>
</html>
