<?php

require_once "Models/userModel.php";


$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    connectUser($pdo);
    $template = "Views/Users/connexion.php";
    require_once  "Views/base.php";
}elseif ($uri == "/insciptionOrEditProfile") {
            createUser($pdo);
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once  "Views/base.php";
}elseif ($uri === "/deleteProfil") {
    deleteUser($pdo);
    session_destroy();
    header("location:/index.php");
    require_once "views/Users/inscriptionOrEditProfil.php";
}




