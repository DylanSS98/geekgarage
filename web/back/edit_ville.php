<?php

require 'db.php';

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

    <title>Edit</title>
</head>
<body>

    <h2 style="margin-bottom: 100px">Espace ADMIN</h2>
    <table class="table w-50">
        <thead>
        <th class="col">ID</th>
        <th class="col">Ville</th>
        <th class="col">Adresse</th>
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
            <td><?= $ville['lat'] ?></td>
            <td><?= $ville['lon'] ?></td>
            <td><button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Supprimer</button></td>
            </tr>
        <?php endforeach ; ?>

        </tbody>
    </table>



    <?php
    if (isset($_POST['form_submit'])) {
        $nom_ville = $_POST['ville_name'];
        $adress_ville = $_POST['ville_adress'];
        $lat = $_POST['ville_lat'];
        $lon = $_POST['ville_lon'];

        $insert = $pdo->prepare("INSERT INTO villes (Villes, adresse, lat, lon) VALUES (?,?,?,?)");
        $insert->execute([$nom_ville, $adress_ville, $lat, $lon]);
    }
    ?>
    <h3 style="margin-top: 100px">Ajouter une ville</h3>
    <form action="" method="post" class="form-group">

        <input type="text" name="ville_name" placeholder="Ville" class="form-control w-50 mt-2">

        <input type="text" name="ville_adress" placeholder="Adresse" class="form-control w-50 mt-2"">

        <input type="text" name="ville_lat" placeholder="lat" class="form-control w-50 mt-2"">

        <input type="text" name="ville_lon" placeholder="lon" class="form-control w-50 mt-2"">

        <button type="submit" name="form_submit" class="btn btn-primary mt-2">Enregistrer</button>

        <?php if (isset($insert)){
            echo '<div class="alert alert-success" role="alert">
            
  Enregistrer avec succés !
</div>';
            header('Location: edit_ville.php');
        }
        ?>

    </form>



</body>
</html>
