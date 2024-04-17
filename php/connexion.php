<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<?php
// Vérification de l'envoi du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification des informations de connexion (Ceci est un exemple, vous devez utiliser une méthode sécurisée pour vérifier les informations)
    if ($username === 'utilisateur' && $password === 'motdepasse') {
        echo "<h2>Bienvenue, $username!</h2>";
    } else {
        echo "<h2>Identifiants incorrects.</h2>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div>
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <input type="checkbox" onclick="showPassword()">Afficher le mot de passe
    </div>
    <button type="submit">Connexion</button>
</form>

<script>
    function showPassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

</body>
</html>
