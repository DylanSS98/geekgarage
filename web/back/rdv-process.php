






<?php
$sql = $pdo->prepare("SELECT id, centre, email, nom, adresse, telephone, message, status, DATE_FORMAT(date, '%d/%m/%Y') AS datefr FROM rdv WHERE status = 'Traité'");
$sql->execute();
$rdvlist = $sql->fetchall();
?>

<table class="table w-60">
    <thead>
    <th class="col">Centre</th>
    <th class="col">Email</th>
    <th class="col">Nom</th>
    <th class="col">adresse</th>
    <th class="col">N° de téléphone</th>
    <th class="col">Message</th>
    <th class="col">Status</th>
    <th class="col">date</th>
    <th class="col">Action</th>
    </thead>

    <tbody>
    <?php foreach ($rdvlist as $rdv): ?>





        <tr>
            <td><?= $rdv['centre'] ?></td>
            <td><a href="mailto: <?= $rdv['email'] ?>"><?= $rdv['email'] ?></a></td>
            <td><?= $rdv['nom'] ?></td>
            <td><?= $rdv['adresse'] ?></td>
            <td><?= $rdv['telephone'] ?></td>
            <td class="message"> <?= $rdv['message'] ?></td>
            <td><?= $rdv['status'] ?></td>
            <td><?= $rdv['datefr'] ?></td>
            <td><a class="btn btn-danger" href="../../back/delete_rdv.php?lign_delete=<?= intval($rdv['id']) ?>">Supprimer</a></td>
        </tr>
    <?php endforeach ; ?>


    </tbody>
</table>
