<?php
// Définition de la fonction nav_item pour créer un élément de menu de navigation
function nav_item (string $lien, string $titre, string $linkClass = ''): string 
{
    // Par défaut, la classe est "nav-item"
    $classe = 'nav-item';

    // Si la page actuelle correspond au lien, ajoute la classe "active"
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }

    // Retourne un élément de menu de navigation au format HTML
    return <<<HTML
    <li class="$classe">
        <a class="$linkClass" href="$lien">$titre</a>
    </li>
HTML;
}

// Définition de la fonction nav_menu pour créer le menu de navigation complet
function nav_menu (string $linkClass = ''): string
{
    // Appelle la fonction nav_item pour créer les éléments du menu de navigation
    return 
        nav_item('/index.php', 'Accueil', $linkClass) . // Élément "Accueil"
        nav_item('/contact.php', 'Contact', $linkClass); // Élément "Contact"
}
?>
