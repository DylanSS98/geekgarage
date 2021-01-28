<?php

require '../../back/db.php';

$sql = $pdo->prepare('SELECT * FROM villes');
$sql->execute();
$villes = $sql->fetchall();
 ?>

<!doctype html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Admin</title>

</head>
<body>


    <table class="table w-50">
        <thead>
        <th class="col">ID</th>
        <th class="col">Ville</th>
        <th class="col">Adresse</th>
        <th class="col">N° de téléphone</th>
        <th class="col">lat</th>
        <th class="col">lon</th>
        <th class="col">action</th>
        </thead>

        <tbody>
        <?php foreach ($villes as $ville): ?>
            <tr>
            <td><?= $ville['id'] ?></td>
            <td><?= $ville['Villes'] ?></td>
            <td><?= $ville['adresse'] ?></td>
            <td><?= $ville['tel'] ?></td>
            <td><?= $ville['lat'] ?></td>
            <td><?= $ville['lon'] ?></td>
            <td><button class="btn btn-warning">Edit</button> <a class="btn btn-danger" href="../../back/delete.php?lign_delete=<?= intval($ville['id']) ?>">Supprimer</a></td>
            </tr>
        <?php endforeach ; ?>

        </tbody>
    </table>
    </form>

    <a href="../../" class="btn btn-secondary">Retour au site</a>
    <a href="../inserernouvellevilles/insert_city.php" class="btn btn-primary">Ajouter une ville</a>
</body>
</html>
