<?php

require_once "Models/critereUtilisateursModele.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/CreateProgram") {
    CreateCritereUtilisateur($pdo);
    $template = "Views/Components/CreateProgram.php";
    require_once  "Views/base.php";
}

elseif (str_contains($uri,"/pageAccueil.php")) {
    $critere = selectLeCritere($pdo); //combattant pour recup un combattant afin de le voir lui seul
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
}