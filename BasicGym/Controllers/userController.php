<?php

require_once "Models/userModel.php";
require_once "Models/critereUtilisateursModele.php";


$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    if (isset ($_POST["btnEnvoiConnect"])) {
        connectUser($pdo);  
    }
    $template = "Views/Users/connexion.php";
    require_once  "Views/base.php"; 
}elseif ($uri == "/insciptionOrEditProfile") {
    $messageErrorLogin = verifData();
        if (!($messageErrorLogin)) {
            createUser($pdo);
        }
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once  "Views/base.php";
}elseif ($uri === "/deleteProfil") {
    DeleteCritereUser($pdo);
    deleteUser($pdo);
    session_destroy();
    header('location:/index.php');
}elseif ($uri === "/Deconnexion") {
    session_destroy();
    header('location:/connexion');
}elseif ($uri === "/modifyProfil") {
    updateUser($pdo);
    reloadSession($pdo); //windows R
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once  "Views/base.php"; 
}elseif ($uri === "/compte") {
    $template = "Views/Users/compte.php";
    require_once  "Views/base.php";
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