<?php

require_once "Models/critereUtilisateursModele.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri == "/") {
    selectLeCritereprUser($pdo);
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
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