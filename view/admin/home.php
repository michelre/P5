<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
    <div class="container">
    	

    	<h1>Espace admin</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td><?= $customer->getPrenom() ?></td>
                        <td>
                            
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
                

        </table>
        
    </div>

</body>
</html>
