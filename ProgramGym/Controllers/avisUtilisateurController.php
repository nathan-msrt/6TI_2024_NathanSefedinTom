<?php
require_once __DIR__ . "/../Models/avisUtilisateurModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri == "/compte") {
    if (isset($_POST["btnEnvoiAvis"])) {
        ajouterAvisGeneral($pdo);
    }
    $template = "Views/Users/compte.php";
    require_once __DIR__ . "/../Views/base.php";
} elseif ($uri == "/modifierAvis") {
    if (isset($_POST["btnModifierAvis"])) {
        mettreAJourAvisGeneral($pdo);
        header('Location: /compte');
    }
    $template = "Views/Avis/modifierAvis.php";
    require_once __DIR__ . "/../Views/base.php";
} elseif ($uri == "/supprimerAvis") {
    if (isset($_POST["btnSupprimerAvis"])) {
        supprimerAvisGeneral($pdo);
        header('Location: /compte');
    }
} elseif ($uri == "/") {
    $avis = afficherAvisGeneraux($pdo);
    $template = "Views/pageAccueil.php";
    require_once __DIR__ . "/../Views/base.php";
} elseif ($uri == "/ajouterAvis") {
    if (isset($_POST["btnEnvoiAvis"])) {
        ajouterAvisGeneral($pdo);
        header('Location: /compte');
    }
}
