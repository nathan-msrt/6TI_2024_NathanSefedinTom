<?php

require_once "Models/userModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    $template = "Views/Users/connexion.php";
    require_once  "Views/base.php";
}elseif ($uri == "/insciptionOrEditProfile") {
    $template = "Views/Users/insciptionOrEditProfile.php";
    require_once  "Views/base.php";
}