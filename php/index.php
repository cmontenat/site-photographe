<?php 
$title = "Page d'accueil";
require 'header.php'; 
?>

<link href="style-header.css" rel="stylesheet" />
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="montagne.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="japon.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="photo.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="tt">
    <h2>Photographe Yumi : Capturer la Magie du Japon</h2>
    <div class="toto">
            <img src="metier.jpg" alt="Photographe" style="width: 250px; height: 200px; margin-right: 20px;">
            <p>Je suis Yumi, une photographe passionnée dont l'objectif est de capturer la magie de mon pays natal, le Japon. En tant que femme photographe, j'apporte une perspective unique à ma vision artistique du monde qui m'entoure.
        
        Née et élevée au Japon, j'ai toujours été fascinée par la beauté et la richesse culturelle de ce pays. C'est cette passion qui m'a inspirée à me spécialiser dans la photographie japonaise. Chaque instant capturé à travers mon objectif raconte une histoire, une histoire de tradition, de modernité, de nature et de vie urbaine.</p>
        
        <p>La photographie me permet d'exprimer ma profonde connexion avec le Japon. Mes images reflètent la délicatesse des cerisiers en fleurs, la sérénité des temples anciens, et l'énergie des rues animées de Tokyo. Chaque photo est une exploration de l'âme de ce pays, une célébration de sa diversité et de son héritage.
        
        Mon style photographique est un mélange de techniques traditionnelles et de créativité contemporaine. Je cherche toujours à capturer l'essence même de chaque lieu que je photographie, tout en y ajoutant ma touche personnelle.</p>
        
        <p>Au-delà de la photographie, je m'efforce de promouvoir la culture japonaise à travers mon travail. J'espère que mes photos vous transportent directement au cœur de ce pays extraordinaire.
        
        Voyagez avec moi à travers le Japon, et découvrez ses multiples facettes à travers mon objectif. Chaque image est un voyage en soi, une invitation à ressentir l'émotion du moment capturé. Je suis honorée de partager ma passion avec vous, et j'espère que mes photos vous inspirent et vous transportent dans l'univers magique du Japon.</p>
    </div>
</div>
<!-- Gallery -->
<h2 style:"display: flex; justify-conent:center; align-item:center;">Galerie Photos</h2>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
<h2>Prestations</h2>
<div class="card-group"><!-- prix-->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Shooting photo</h5>
      <p class="card-text">(Photographie) Séance pendant laquelle un modèle (ou plus souvent un mannequin) est photographié autour d'un thème défini par un photographe professionnel.</p>
      <p class="card-prix"><small class="text-muted"><strong>30 € par séance</strong></small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Retouche photo</h5>
      <p class="card-text">Pour avoir des photo de meilleure qualités en couleur</p>
      <p class="card-prix"><small class="text-muted"><strong>10 € par photo</strong></small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Album photo</h5>
      <p class="card-text">Création d'un album photo avec des pages personnalisées</p>
      <p class="card-prix"><small class="text-muted"><strong>35 € l'album</strong></small></p>
    </div>
  </div>
</div>


<?php

require 'footer.php'; 
?>



