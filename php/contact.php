<?php 
// Définition du titre de la page
$title = "Nous contacter";
// Inclusion du fichier d'en-tête (header.php)
require 'header.php'; 
?>
<!-- Lien vers la feuille de style CSS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
    <style>
        /* ... Votre CSS actuel ... */
        body {
            font-family: Arial, sans-serif;
            background-color: #3498db;
            text-align: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        #form-container {
            width: 50%;
            margin: 20px auto; /* Ajout de marges pour centrer verticalement et horizontalement */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Ajustement pour centrer correctement le texte du formulaire */
            align-items: center; /* Centrer les éléments enfants horizontalement */
        }


        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"], textarea {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #c0392b;
        }
        .navbar {
            display: flex;
            background: linear-gradient(0deg, rgba(148,50,217,1) 9%, rgba(244,60,209,1) 73%);
            justify-content: center;
            height: 60px;
            width: 100%;
        }
        
        .navbar a {
            display: flex;
            color: white;
            justify-content: end;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
            font-weight: 700;
        }
        .navbar a:hover{
            background-color: blueviolet;
        }
        
    </style>
</head>
<body>

    <div id="form-container">
        <h2 style="color: #3498db;">Formulaire de Contact</h2>

        <?php
        // Traitement du formulaire ici (à ajouter)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les données du formulaire
            $objet = $_POST["objet"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Effectuer des opérations de validation et de traitement ici
            $validation_ok = true;

            // Vérification de l'adresse e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color: #e74c3c;'>Adresse e-mail invalide. Veuillez entrer une adresse e-mail valide.</p>";
                $validation_ok = false;
            }

            if ($validation_ok) {
                // Envoi du mail
                $destinataire = "chloe.montenat.defays@gmail.com";
                $sujet = "Nouveau message de contact de $objet";
                $corps = "Objet : $objet\nEmail : $email\nMessage : $message";
                $entetes = "De : $email";

                if (mail($destinataire, $sujet, $corps, $entetes)) {
                    echo "<p style='color: #2ecc71;'>Votre message a été envoyé avec succès.</p>";
                } else {
                    echo "<p style='color: #e74c3c;'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>";
                }
            }
        }
        ?>

        <form action="" method="post">
            <label for="objet">Objet du message:</label>
            <input type="text" id="objet" name="objet" required>

            <label for="email">Adresse e-mail de l'expéditeur:</label>
            <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <small>Veuillez entrer une adresse e-mail valide.</small>

            <label for="message">Contenu du message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>
<?php 
// Inclusion du fichier de pied de page (footer.php)
require 'footer.php'; 
?>
