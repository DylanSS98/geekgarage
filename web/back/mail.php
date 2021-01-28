<?php
//php mail

if (empty($_POST['email']) ||
    empty($_POST['name']) ||
    empty($_POST['tel']) ||
    empty($_POST['prob']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided";
    return false;
}

$nom = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['prob']));
$tel = strip_tags(htmlspecialchars($_POST['tel']));


//parametre de l'envoie de message

$to = 'dylan.silva.sanches@outlook.fr';
$email_subject = "Geek garage, message de $nom";
$email_body = "Vous avez reçus un mail depuis le formulaire de contact de votre site. \n\n" . "Voici les détails: \n\nName: $nom\n\nEmail: $email\n\nTelephone: $tel\n\nMessage:\n$message";
$headers = "From: dylan.silva.sanches@outlook.fr\n";
$headers .= "Reply-to: $email";
$sendmail = mail($to, $email_subject, $email_body, $headers);

return true;

?>