<?php
//index pour admin
session_start();
if (isset($_SESSION['auth'])){

    ?>
    <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/back.css">
    <title>admin</title>

</head>
<body>
<div class="index_back">
<h2 class="" style="margin-bottom: 100px">BIENVENUE ADMINISTRATEUR</h2>
<table>
    <tbody>
    <tr>
        <td><a style="margin-bottom: 50px" class="btn btn-info" href="dash/espace_admin.php">Accéder au dashbord</a></td>
    </tr>

    <tr>
        <td ><a class="btn btn-info" href="../">Retourner sur le site</a></td>
    </tr>
    </tbody>
</table>
</div>


</body>
</html>

    <?php
}

else {
    header('Location: ../back/login.php');
}
?>
