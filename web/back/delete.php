<?php

require 'db.php';

$id = $_REQUEST["lign_delete"];

$id = intval($id);

$req = $pdo->prepare("DELETE FROM villes WHERE id = $id ");

$req->execute();

header('Location: ../admin/gererlesvilles/edit_ville.php');

