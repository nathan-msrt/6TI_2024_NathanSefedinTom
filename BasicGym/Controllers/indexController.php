<?php

$uri = $_SERVER["REQUEST_URI"];
// Vérifiez si l'utilisateur est connecté
$isLoggedIn = isset($_SESSION['utilisateur']);
$loginLink = $isLoggedIn ? "profil" : "connexion";
$linkText = $isLoggedIn ? "Profil" : "Se connecter";

if ($uri == "/index.php"  ||  $uri == "/") {
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
}elseif ($uri == "/CreateProgram"){
    $template = "Views/Components/CreateProgram.php";
    require_once  "Views/base.php";
}
elseif ($uri == "/OurProgram"){
    $template = "Views/Components/OurProgram.php";
    require_once  "Views/base.php";
}