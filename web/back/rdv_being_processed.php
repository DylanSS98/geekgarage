










<?php
$sql = $pdo->prepare("SELECT id, centre, email, nom, adresse, telephone, message, status, DATE_FORMAT(date, '%d/%m/%Y') AS datefr FROM rdv WHERE status = 'En cours de traitement'");
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


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Message de <?= $rdv['nom'] ?></h5>
                    </div>
                    <div class="modal-body">
                        <?= $rdv['message'] ?>
                    </div>
                    <div class="modal-footer">
                        <p>Message reçus le <?= $rdv['datefr'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <tr>
            <td><?= $rdv['centre'] ?></td>
            <td><a href="mailto: <?= $rdv['email'] ?>"><?= $rdv['email'] ?></a></td>
            <td><?= $rdv['nom'] ?></td>
            <td><?= $rdv['adresse'] ?></td>
            <td><?= $rdv['telephone'] ?></td>
            <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Afficher le message
                </button></td>
            <td><?= $rdv['status'] ?></td>
            <td><?= $rdv['datefr'] ?></td>
            <td><a href="../../back/update_status_proccess.php?id_rdv=<?= intval($rdv['id']) ?>" class="btn btn-success">Changer le status</a><a class="btn btn-danger" href="../../back/delete_rdv.php?lign_delete=<?= intval($rdv['id']) ?>">Supprimer</a></td>
        </tr>
    <?php endforeach ; ?>


    </tbody>
</table>
