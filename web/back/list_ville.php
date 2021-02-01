<?php
$sql = $pdo->prepare('SELECT * FROM villes');
$sql->execute();
$villes = $sql->fetchall();
 ?>

    <table class="table w-60">
        <thead>
        <th class="col">ID</th>
        <th class="col">Ville</th>
        <th class="col">Adresse</th>
        <th class="col">Horaire</th>
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
            <td><?= $ville['horaire'] ?></td>
            <td><?= $ville['tel'] ?></td>
            <td><?= $ville['lat'] ?></td>
            <td><?= $ville['lon'] ?></td>
            <td><a class="btn btn-warning" href="edit_ville.php?lign_edit=<?= intval($ville['id']) ?>">Edit</a> <a class="btn btn-danger" href="../../back/delete.php?lign_delete=<?= intval($ville['id']) ?>">Supprimer</a></td>
            </tr>
        <?php endforeach ; ?>

        </tbody>
    </table>



