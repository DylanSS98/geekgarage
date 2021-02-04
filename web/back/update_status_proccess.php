<?php


require 'db.php';

$id = $_GET["id_rdv"];

$id = intval($id);

$sql = $pdo->prepare("UPDATE rdv SET status = 'Traité' WHERE id = '$id'");
$sql->execute();

if ($sql) {
    header('Location: ../admin/dash/espace_rdv.php');
} else {
    echo 'erreur';
}