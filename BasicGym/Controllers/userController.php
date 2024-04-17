<?php

require_once "../Models/userModel.php";


$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    connectUser($pdo);
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
    deleteUser($pdo);
    session_destroy();
    header("location:/index.php");
    require_once "views/Users/inscriptionOrEditProfil.php";
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

