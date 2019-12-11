<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>


    <nav>
        <a class="btn btn-primary" href="/logout">Se déconnecter</a>
        <a class="btn btn-primary" href="/">Accueil</a>
        
    </nav>

    <div class="container">
    	

    	<h1>Espace admin</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Noms</th>
                    <th>Email</th>
                    <th>Gérer les customers</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td><?= $customer->getPrenom() ?></td>
                        <td><?= $customer->getNom() ?></td>
                        <td><?= $customer->getEmail() ?></td>
                        <td><a class="btn btn-primary" href="?action=delete_customer_action&customer_id=<?= $customer->getId() ?>">Supprimer un customer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
       

        </table>
        
    </div>

</body>
</html>
