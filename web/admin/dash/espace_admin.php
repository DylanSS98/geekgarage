<?php

require '../../back/db.php';

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/back.css">
    <title>ADMIN</title>
</head>

<header>
    <h1>DASHBORD</h1>
</header>
    <div id="menu">
        <h3>Menu</h3>
        <nav>
            <ul>
                <li><a href="../../back/insert_city.php" class="btn btn-info">Ajouter une ville</a></li>
                <li><a href="" class="btn btn-info">Ajouter un rendez-vous</a></li>
                <li><a href="../../back/register.php" class="btn btn-info">Ajouter un administrateur</a></li>
                <li><a href="../../back/disconnect.php" class="btn btn-danger">Se déconnecter</a></li>
                <li><a href="../../" class="btn btn-secondary">Retourner sur le site</a></li>

            </ul>
        </nav>
    </div>


    <div id="rdv">
        <h3>Liste des rendez-vous</h3>
    </div>
    <div id="list">
        <h3>Liste villes</h3>
        <?php require '../../back/list_ville.php' ?>
    </div>




    <div id="compteur">
        <h3>Compteur</h3>
        <ul>
            <li>Nombre de demandes de réparation en attente : </li>
            <li>Nombre de réparations pris en charge : </li>
            <li>Nombre de réparations terminées :</li>
        </ul>

    </div>


