<?php
//php mail

if (empty($_POST['centre']) ||
    empty($_POST['email']) ||
    empty($_POST['name']) ||
    empty($_POST['tel']) ||
    empty($_POST['adresse']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided";
    return false;
}

$centre = strip_tags(htmlspecialchars($_POST['centre']));
$nom = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$tel = strip_tags(htmlspecialchars($_POST['tel']));
$adresse = strip_tags(htmlspecialchars($_POST['adresse']));



require 'db.php';
$sql = $pdo->prepare("INSERT INTO rdv (centre, email, nom, adresse, telephone, message) VALUES (?,?,?,?,?,?)");
$sql->execute([$centre, $email, $nom, $adresse, $tel, $message]);
//parametre de l'envoie de message

$to = 'dylan.silva.sanches@outlook.fr';
$email_subject = "Geek garage, message de $nom";
$email_body = "Vous avez reçus un mail depuis le formulaire de contact de votre site. \n\n" . "Voici les détails: \n\nCentre: $centre\n\nName: $nom\n\nEmail: $email\n\nAdresse: $adresse\n\nTelephone: $tel\n\nMessage:\n$message";
$headers = "From: dylan.silva.sanches@outlook.fr\n";
$headers .= "Reply-to: $email";
mail($to, $email_subject, $email_body, $headers);


return true;

?>