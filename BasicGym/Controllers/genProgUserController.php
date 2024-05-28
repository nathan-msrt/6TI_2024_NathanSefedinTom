<?php

require_once __DIR__ . "/../Models/genProgUserModel.php";
require_once __DIR__ . "/critereUtilisateurController.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/CreateProgram") {
    if (isset ($_POST["btnEnvoiGen"])) {
        RecupValeurBdd($pdo);
        selectLeCritere($pdo);
    }
    $template = "Views/Components/pageAccueil.php";
    require_once __DIR__ . "/../Views/base.php";
}

elseif (str_contains($uri,"/pageAccueil.php")) {
    var_dump($_SESSION["critereutilisateur"]);
    selectLeCritere($pdo); //combattant pour recup un combattant afin de le voir lui seul
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
}