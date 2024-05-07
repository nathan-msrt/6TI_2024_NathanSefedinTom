
<?php/*

require_once "Models/genProgUserModel.php.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/CreateProgram") {
    if (isset ($_POST["btnEnvoiGen"])) {
        RecupValeurBdd($pdo);
        selectLeCritere($pdo);
    }
    $template = "Views/Components/pageAccueil.php";
    require_once  "Views/base.php";
}

elseif (str_contains($uri,"/pageAccueil.php")) {
    var_dump($_SESSION["critereutilisateur"]);
    selectLeCritere($pdo); //combattant pour recup un combattant afin de le voir lui seul
    ImcProg();
    $template = "Views/pageAccueil.php";
    require_once  "Views/base.php";
}