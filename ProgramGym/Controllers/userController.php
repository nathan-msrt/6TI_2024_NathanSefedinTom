<?php

require_once __DIR__ . "/../Models/critereUtilisateursModele.php";
require_once __DIR__ . "/../Models/userModel.php";


$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    if (isset ($_POST["btnEnvoiConnect"])) {
        connectUser($pdo);  
        header('location:/index.php');
    }
    $template = "Views/Users/connexion.php";
    require_once __DIR__ . "/../Views/base.php"; 
}elseif ($uri == "/insciptionOrEditProfile") {
    $messageErrorLogin = verifData();
    if (!($messageErrorLogin)) {
        $userId = CreateUser($pdo); // Crée l'utilisateur et récupère son ID

        if ($userId) {
            connectUser($pdo); // Connecte automatiquement l'utilisateur
            header('location:/connexion');
        }
    }   
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once __DIR__ . "/../Views/base.php";
}elseif ($uri === "/deleteProfil") {
    DeleteCritereUser($pdo);
    deleteUser($pdo);
    session_destroy();
    header('location:/index.php');
}elseif ($uri === "/Deconnexion") {
    session_destroy();
    header('location:/connexion');
}elseif ($uri === "/modifyProfil") {
    if (isset ($_POST["btnEnvoi"])) {
        updateUser($pdo);
        reloadSession($pdo); //windows R
        header('location:/compte');
    }
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once __DIR__ . "/../Views/base.php"; 
}elseif ($uri === "/compte") {
    $template = "Views/Users/compte.php";
    require_once __DIR__ . "/../Views/base.php";
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

