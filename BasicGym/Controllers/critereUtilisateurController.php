<?php

require_once __DIR__ . "/../Models/critereUtilisateursModele.php";
require_once __DIR__ . "/../Models/genProgUserModel.php";
require_once __DIR__ . "/../Models/selectProgramModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/CreateProgram") {
    if (isset ($_POST["btnEnvoiImc"])) {
        RecupValeurBdd($pdo);
        selectLeCritereprUser($pdo);
        header('location:/index.php');
    }
    $template = "Views/Components/pageAccueil.php";
    require_once __DIR__ . "/../Views/base.php";
}

elseif ($uri === "/ModifProgram") {
    if (isset ($_POST["btnEnvoiImcModif"])) {
        ModifierCritereUser($pdo);
        header('location:/OurProgram.php');
    }
    $template = "Views/Components/pageAccueil.php";
    require_once __DIR__ . "/../Views/base.php";
}

elseif (str_contains($uri, "/pageAccueil.php")) {
    if (isset($_SESSION['utilisateur'])) {
        selectLeCritereprUser($pdo);
        ImcProg($pdo);   
    }   
    $template = "Views/pageAccueil.php";
    require_once "Views/base.php";
}


elseif ($uri === "/OurProgram") {
    if (isset($_SESSION['utilisateur'])) {
        selectLeCritereprUser($pdo);
        ImcProg($pdo);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["btnEnvoiProgGen"])) {
            ChoixProg($pdo);
        }
        $nbJour = $_SESSION["critereutilisateur"]->critereUtilistaeurNbJour;
        $programmeUtilisateur = selectProgram($pdo, $_SESSION['utilisateur']->utilisateurId);
        $_SESSION['programmeUtilisateur'] = $programmeUtilisateur;
        
    }
    $template = "Views/OurProgram.php";
    require_once __DIR__ . "/../Views/base.php";
}