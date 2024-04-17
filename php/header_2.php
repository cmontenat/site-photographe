<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .rectangle-blanc {
            background-color: #ffffff;
            border-radius: 0 20px 20px 0;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .lien {
            display: block;
            text-decoration: none;
            color: #333333;
            margin-bottom: 10px;
        }

        .lien:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="rectangle-blanc">
    <a class="lien" href="accueil.html">Accueil</a>
    <a class="lien" href="tournoi.html">Tournoi</a>
    <a class="lien" href="acces-visiteur.html">Accès Visiteur</a>
    <a class="lien" href="connexion.html">Connexion</a>
</div>

</body>
</html>
