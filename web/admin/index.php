<?php
//index pour admin

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>admin</title>
</head>
<body>
<h2 style="margin-bottom: 100px">Espace ADMIN</h2>
<table>

    <thead>
    <tr>
        <th>Dossier</th>
    </tr>

    </thead>

    <tbody>

    <tr>
        <td><a href="gererlesvilles/list_ville.php"><img style="width: 20%" src="../img/icon_doss.png" alt="">Gerer les villes</a></td>
    </tr>
    <tr>
        <td><a href="inserernouvellevilles/insert_city.php"><img style="width: 20%" src="../img/icon_doss.png" alt="">Ajouter un ville</a></td>
    </tr>
    </tbody>
</table>




<SCRIPT LANGUAGE="javascript">
        code = prompt('Entrez le mot de passe. Attention, respecter les majuscules et les minuscules','Entrer le mot de passe ici');
        if (code != "Online")//Remplacer votremotdepasse par le mot de passe que vous allez choisir...
        {
            location.href="../error/mdpincorrect.php";//ici c'est la page où est redirigé le visiteur qui entre le mauvais mot de passe
        }


</script>

</script>
</body>
</html>
