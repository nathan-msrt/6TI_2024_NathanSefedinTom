<?php

require_once "Models/critereUtilisateursModele.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri == "/")     {
    if(isset($_SESSION['utilisateur'])) {
        selectLeCritereprUser($pdo);
    }   
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
if ($uri == "/index.php") {
    if(isset($_POST["btnEnvoi"])){
        $messageErrorLogin = verifData();
        if (!($messageErrorLogin)) {
            connectUser($pdo);
            header('location:/');
        }
    }
    $template = "Views/Users/connexion.php";
    require_once "Views/base.php";
}elseif ($uri == "/CreateProgram"){
    $template = "Views/Components/CreateProgram.php";
    require_once  "Views/base.php";
}
elseif ($uri == "/OurProgram"){
    $template = "Views/Components/OurProgram.php";
    require_once  "Views/base.php";
}elseif ($uri == "/index.php"){
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
}