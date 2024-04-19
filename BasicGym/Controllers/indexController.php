<?php

require_once "Models/userModel.php";
$uri = $_SERVER["REQUEST_URI"];

if ($uri == "/index.php") {
    var_dump($_POST);
    if(isset($_POST["btnEnvoi"])){
        $messageErrorLogin = verifData();
        if (!($messageErrorLogin)) {
            connectUser($pdo);
            header('location:/');
        }
    }
    
    require_once "Views/Users/connexion.php";
}elseif ($uri == "/CreateProgram"){
    $template = "Views/Components/CreateProgram.php";
    require_once  "Views/base.php";
}
elseif ($uri == "/OurProgram"){
    $template = "Views/Components/OurProgram.php";
    require_once  "Views/base.php";
}elseif($uri == "/"){
    $template = "Views/pageAccueil.php";
    require_once "Views/base.php";
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