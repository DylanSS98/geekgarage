<?php

require 'db.php';

$id = $_GET["id_rdv"];

$id = intval($id);

$sql = $pdo->prepare("UPDATE rdv SET status = 'En cours de traitement' WHERE id = '$id'");
$sql->execute();

if ($sql){
    header('Location: ../admin/dash/espace_admin.php');
}
else{
    echo 'erreur';
}