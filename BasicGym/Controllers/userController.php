<?php

require_once "Models/userModel.php";


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
    require_once "Views/Users/inscriptionOrEditProfil.php";
}elseif ($uri === "/modifyProfil") {
    if(isset($_POST["btnEnvoi"])){
        updateUser($pdo);
        reloadSession($pdo); //windows R
        header("location:/pageAccueil.php");
    }
    require_once "Views/Users/inscriptionOrEditProfile.php";
}elseif ($uri === "/compte") {
    require_once "Views/Users/compte.php";
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

