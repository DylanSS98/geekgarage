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





</div>
<footer>

    <h5>Site conçus par Dylan Silva Sanches</h5>
</footer>
<!-- Js -->
<script type="text/javascript" src="js/appmap.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

</body>
</html>