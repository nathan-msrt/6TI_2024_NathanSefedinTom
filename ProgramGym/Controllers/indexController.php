<?php

require_once __DIR__ . "/../Models/critereUtilisateursModele.php";
require_once __DIR__ . "/../Models/genProgUserModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri == "/")     {
    if(isset($_SESSION['utilisateur'])) {
        selectLeCritereprUser($pdo);
        ImcProg($pdo);   

    }   
    $template = "Views/pageAccueil.php";
    require_once __DIR__ . "/../Views/base.php";
}elseif ($uri == "/CreateProgram"){
    $template = "Views/Components/CreateProgram.php";
    require_once __DIR__ . "/../Views/base.php";
}elseif ($uri == "/ModifProgram"){
    $template = "Views/Components/CreateProgram.php";
    require_once __DIR__ . "/../Views/base.php";
}
elseif ($uri == "/OurProgram"){
    $template = "Views/Components/OurProgram.php";
    require_once __DIR__ . "/../Views/base.php";
}elseif ($uri == "/index.php"){
    $template = "Views/pageAccueil.php";
    require_once __DIR__ . "/../Views/base.php";
}