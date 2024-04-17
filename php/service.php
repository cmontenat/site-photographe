<?php 
$title = "Page des services";
require 'header.php'; ?>
<link href="style-service.css" rel="stylesheet" />
<div class="page">
    <h2>Options de Photographe</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="option-container">
                <label for="shooting">Shooting photo - 30€ par séance :</label>
                <input type="number" id="shooting" name="shooting" min="0" value="<?php echo isset($_POST['shooting']) ? $_POST['shooting'] : 0; ?>">
            </div>
            <div class="option-container">
                <label for="retouche">Retouche photo - 10€ par photo :</label>
                <input type="number" id="retouche" name="retouche" min="0" value="<?php echo isset($_POST['retouche']) ? $_POST['retouche'] : 0; ?>">
            </div>
            <div class="option-container">
                <label for="album">Album photo - 35€ l'album :</label>
                <input type="number" id="album" name="album" min="0" value="<?php echo isset($_POST['album']) ? $_POST['album'] : 0; ?>">
            </div>
            <div class="option-container">
                <label for="album">catalogue photo - 100€ :</label>
                <input type="radio" id="catalogue" name="catalogue" min="0" value="<?php echo isset($_POST['catalogue']) ? $_POST['catalogue'] : 1; ?>">Oui
                <input type="radio" id="catalogue" name="catalogue" min="0" value="<?php echo isset($_POST['catalogue']) ? $_POST['catalogue'] : 0; ?>">Non
            </div>
            <br>
            <input type="submit" value="Calculer le prix total">
        </form>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prix_shooting = 30;
        $prix_retouche = 10;
        $prix_album = 35;
        $prix_catalogue = 100;
        $shooting = isset($_POST['shooting']) ? $_POST['shooting'] : 0;
        $retouche = isset($_POST['retouche']) ? $_POST['retouche'] : 0;
        $album = isset($_POST['album']) ? $_POST['album'] : 0;
        $catalogue = isset($_POST['catalogue']) ? $_POST['catalogue'] : 0;
        
        if ($catalogue == 1) {
            $prix_total = ($prix_shooting * $shooting) + ($prix_retouche * $retouche) + ($prix_album * $album)+$prix_catalogue;
        }else{
            $prix_total = ($prix_shooting * $shooting) + ($prix_retouche * $retouche) + ($prix_album * $album);
        }
       

        
        echo "<h2>Total : $prix_total €</h2>";
    }
    
    // Fonction pour vérifier si le magasin est ouvert
    function estOuvert($heureActuelle, $ouverture, $fermeture) {
        return ($heureActuelle >= $ouverture && $heureActuelle < $fermeture);
    }
    
    // Définition des horaires d'ouverture du magasin (en heures)
    $heureActuelle = date("H:i"); // Heure actuelle
    $jourSemaine = date("N"); // Jour de la semaine (1 pour lundi, 7 pour dimanche)
    
    // Horaires d'ouverture pour les jours de semaine
    $ouvertureSemaine = "10:00"; // Heure d'ouverture en semaine
    $fermetureSemaine = "17:00"; // Heure de fermeture en semaine
    
    // Horaires d'ouverture pour les week-ends (samedi et dimanche)
    $ouvertureWeekend = "10:00"; // Heure d'ouverture le week-end
    $fermetureWeekend = "15:00"; // Heure de fermeture le week-end
    
    // Vérifier si le magasin est ouvert ou fermé en fonction du jour de la semaine
    if ($jourSemaine >= 1 && $jourSemaine <= 5) { // Jours de semaine (lundi à vendredi)
        if (estOuvert($heureActuelle, $ouvertureSemaine, $fermetureSemaine)) {
            $status = "Ouvert";
            $style = "color: green;";
        } else {
            $status = "Fermé";
            $style = "color: red;";
        }
    } else { // Week-end (samedi et dimanche)
        if (estOuvert($heureActuelle, $ouvertureWeekend, $fermetureWeekend)) {
            $status = "Ouvert";
            $style = "color: green;";
        } else {
            $status = "Fermé";
            $style = "color: red;";
        }
    }
    
    // Affichage des horaires avec le statut
    echo "<p style='$style'>Le magasin est actuellement $status.</p>";
    if ($jourSemaine >= 1 && $jourSemaine <= 5) {
        echo "<p>Horaires d'ouverture en semaine : $ouvertureSemaine - $fermetureSemaine</p>";
    } else {
        echo "<p>Horaires d'ouverture le week-end : $ouvertureWeekend - $fermetureWeekend</p>";
    }
    
    ?>
</div>