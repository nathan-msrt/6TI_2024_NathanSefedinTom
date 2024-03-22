<?php

require_once "Models/userModel.php";

$uri = $_SERVER["REQUEST_URI"];

// Vérifiez si l'utilisateur est connecté
$isLoggedIn = isset($_SESSION['utilisateur']);

// Déterminez quel lien afficher en fonction de l'état de connexion
$loginLink = $isLoggedIn ? "profil" : "connexion";
$linkText = $isLoggedIn ? "Profil" : "Se connecter";

// Connexion lien
if($uri == "/connexion"){
    $template = "Views/Users/connexion.php";
    require_once  "Views/base.php";
    if(isset($_POST["btnEnvoi"])){
        connectUser($pdo);
        header('location:/');
    }
// Inscription lien
}elseif ($uri == "/inscription") {
    $messageErrorLogin = verifData();
        if (!($messageErrorLogin)) {
            createUser($pdo);
        }
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once  "Views/base.php";
// Profil lien
}elseif($uri == "/profil") {
    require_once "Templates/users/profil.php";
}
function verifData(){
    foreach($_POST as $key => $value) {
        if (empty(str_replace(' ', '', $value))) {
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
        }
    }
    if (isset($messageErrorLogin)) {
        return $messageErrorLogin;
    }
    else {
        return false;
    }
}
