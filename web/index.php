<!doctype html>
<html lang="dfr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
    <link rel="stylesheet" href="css/style.scss">

    <title>Geekgarage</title>
</head>
<body>

<header>
    <!--<div class="navbarre">

        <nav>
            <ul>
                <li>
                    <a href="#nous">Nous</a>
                </li>

                <li>
                    <a href="#service">Services</a>
                </li>

                <li>
                    <a href="#localisation">Contact</a>
                </li>
            </ul>
        </nav>
    </div>-->
    <img class="logo_geek" src="img/logo.png" alt="logo geek garage">
</header>
<div id="corps">

    <div id="nous" class="section">
        <img class="img_nous" style="width: 100%" src="img/vintage-typewriter-qhd.jpg" alt="">

        <h3 style="padding-top: 50px">A propos de nous</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos fugiat iste, magni maiores nulla
            odit tempore veritatis? Aspernatur blanditiis fugiat quisquam reprehenderit! Ad, aperiam illum ipsam
            laboriosam quam repudiandae.</p>

    </div>


    <div id="service">
        <h2>Nos services</h2>
       <ul>
           <!--<li>
               <img src="img/icone_service.png" alt="">
               <p>Dépannage Software</p>
           </li>-->

           <li>
               <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
                   <div class="card-header">Header</div>
                   <div class="card-body">
                       <h5 class="card-title">Secondary card title</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   </div>
               </div>
           </li>

           <li>
               <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
                   <div class="card-header">Header</div>
                   <div class="card-body">
                       <h5 class="card-title">Secondary card title</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   </div>
               </div>
           </li>

           <li>
               <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
                   <div class="card-header">Header</div>
                   <div class="card-body">
                       <h5 class="card-title">Secondary card title</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   </div>
               </div>
           </li>
       </ul>



    </div>

    <div id="localisation">
        <h2>Nous trouver</h2>

        <div id="maCarte">

        </div>

        <!-- Modal -->
        <div class="contain_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
        </div>




</div>
<footer>

    <h5>Site conçus par Dylan Silva Sanches</h5>

    <a style="font-size: 0.5em" href="admin/index.php">Accés admin</a>
</footer>
<!-- Js -->
<!--<script type="text/javascript" src="js/appmap.js"></script>-->
    <?php require 'back/db.php';

    $sql = $pdo->prepare('SELECT villes, adresse, tel, lat, lon FROM villes');
    $sql->execute();
    $villes = $sql->fetchAll();

    $villes_json = json_encode($villes);
    ?>

    <script type="text/javascript">

        var lat = 47.61634;
        var lon = 6.14439;
        var carte = null;
        // Fonction d'initialisation de la carte
        function initMap() {

            // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
            carte = L.map('maCarte').setView([lat, lon], 11);
            // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(carte);
        }
        window.onload = function(){
            // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
            initMap();

            var villes = <?= $villes_json; ?>

            var tableauMarker = []

            var marqueurs = L.markerClusterGroup();


// creation de marqueur avec Popup

            for (ville in villes){
                var marqueur1 =
                    L.marker([villes[ville].lat, villes[ville].lon]); //addTo(carte);
                marqueur1.bindPopup("<h5 style='color: darkred'>Online FormaPro</h5>" +
                    [villes[ville].villes]+
                    "<br>"+
                    [villes[ville].adresse]+
                    "<br>"+
                    [villes[ville].tel]+
                    "<br>"+
            "<button style='margin-top: 5px' type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Contacter</button>");
        marqueurs.addLayer(marqueur1);
}


        //On ajoute le marqueur au tableau

        tableauMarker.push(marqueurs);

        //On regroupe les marqueurs dans un groupe lefleat
        var groupe = new L.featureGroup(tableauMarker);

        //On adapte le zoom au groupe
        carte.fitBounds(groupe.getBounds());

        carte.addLayer(marqueurs);
        };
    </script>

    <script type="text/javascript" src="js/app.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>
</html>