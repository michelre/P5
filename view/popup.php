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


</body>
</html>
