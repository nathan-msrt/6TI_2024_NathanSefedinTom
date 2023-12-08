<?php

require_once "Models/userModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    require_once "Views/Users/connexion.php";
}elseif ($uri == "/insciptionOrEditProfile") {
    require_once "Views/Users/insciptionOrEditProfile.php";
}