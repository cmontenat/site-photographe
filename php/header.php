<?php 
// Inclusion du fichier de fonctions (functions.php)
require_once 'functions.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Lien vers la feuille de style CSS -->
    <link href="style-header.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>
        <?php if (isset($title)): ?>
            <?= $title ?>
        <?php else: ?>
            Mon site
        <?php endif ?>
    </title>

    <!-- Lien vers la feuille de style Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body>
    <div class="btn-group" role="group" aria-label="Basic example">
        <img src="yumi.png" width="2.5%">
        <h5>Yumi Ishiyama,<strong> Photographe</strong></h5>
        <a class="navbar-brand" href="https://montenat.asci-asso.fr/">Mon site</a>
        <a class="navbar-brand" href="index.php">Accueil</a>
        <a class="navbar-brand" href="contact.php">Contact</a>
        <a class="navbar-brand" href="service.php">Services</a>
    </div>

    <main role="main" class="container">
