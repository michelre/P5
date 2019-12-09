<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/leaflet.css">
    <link rel="stylesheet" href="/public/css/leaflet-gesture-handling.min.css">
    <title>Ta Destination Surf</title>
</head>

<body>

<header>
    <div class="row">
        <nav class="navbar">
            <div class="title col-lg-6">
                <a href="http://voyagesetsurf.com/"><img class="img-fluid" src="/public/images/logo.png" alt="logo"></a>
            </div>
            <div class="dropdown col-lg-6 col-xs-1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Menu
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/">Accueil</a>

                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div class="row">
        <!-- Contient l'image et la description -->
        <div class="carousel-inner">
            <img class="img-fluid" src="/public/images/slider1.jpg" alt="First slide">
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

    <br>
    <form action="" method="post" enctype="text/plain">
        <label>Budget:
            <br>
            <input type="radio" name="nom_variable_1" value="choix1">
            <?php
            foreach ($budgets as $budget) {
                ?>
                <div class="budget"><?php echo $budget->getValeur(); ?></div>
                <?php
            }
            ?>
            <br>
        </label>
        <br>
        <label>Niveau:
            <br>
            <input type="radio" name="nom_variable_1" value="choix1">
            <?php
            foreach ($niveaux as $niveau) {
                ?>
                <div class="niveau"><?php echo $niveau->getValeur(); ?></div>
                <?php
            }
            ?>
            <br>
        </label>
        <br>
        <label>Saison:
            <br>
            <input type="radio" name="nom_variable_1" value="choix1">
            <?php
            foreach ($saisons as $saison) {
                ?>
                <div class="saison"><?php echo $saison->getMois(); ?></div>
                <?php
            }
            ?>
            <br>
        </label>
        <br>
        <button type="button" value="BouttonSubmit"data-toggle="modal" data-target="#subscribeCustomer" name="expedier email"><a href="javascript:showPopup();"
                                                                             title="Montrer le popup">Voir la
                destination</a>
        </button>
    </form>
</div>
<br>

<div class="modal fade" id="subscribeCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Inscrivez vous pour voir le résultat
                <form action="*" method="post">
                    <div>
                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom">
                    </div>

                    <div>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom">
                    </div>

                    <div>
                        <label for="email">e-mail :</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="button">
                        <button type="submit">Envoyer le message</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div id="map"></div>

    <h2>Carte</h2>
    <br>
    <img class="img-fluid" src="/public/images/map.png" alt="map">
</div>

<footer>
    <p><a href="http://voyagesetsurf.com/"> 2019 Voyages et Surf</a> -
        <a href="/login">Espace Administrateur</a>
    </p>
</footer>

<script src="/public/js/lib/jquery.min.js"></script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/js/lib/leaflet.js"></script>
<script src="/public/js/lib/leaflet-gesture-handling.min.js"></script>
<script src="/public/js/Popup.js"></script>
<script src="/public/js/Carte.js"></script>
<script src="/public/js/index.js"></script>


</body>
</html>
