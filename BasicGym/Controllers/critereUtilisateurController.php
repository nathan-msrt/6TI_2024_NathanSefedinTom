<?php

require_once "Models/critereUtilisateursModele.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/CreateProgram") {
    if (isset ($_POST["btnEnvoiImc"])) {
        RecupValeurBdd($pdo);
        selectLeCritereprUser($pdo);
    }
    $template = "Views/Components/pageAccueil.php";
    require_once  "Views/base.php";
}

elseif (str_contains($uri,"/pageAccueil.php")) {
    if(isset($_SESSION['utilisateur'])) {
        selectLeCritereprUser($pdo);
    }   
    IMC();
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
}

elseif ($uri === "/OurProgram") {
    if(isset($_SESSION['utilisateur'])) {
        selectLeCritereprUser($pdo);
    }   
    $template = "Views/OurProgram.php";
    require_once  "Views/base.php";
}