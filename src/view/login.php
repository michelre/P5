<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>

<div class="container">
    <form class="login form" action="index.php?action=login_action" method="post">
        <div class="form-group">
            <label>Login:</label>
            <input type="text" name="login" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Mot de passe:</label>
            <input type="password" name="password" class="form-control" required/>
        </div>
        <input class="button" type="submit" value="Connexion" />

    </form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/public.bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

