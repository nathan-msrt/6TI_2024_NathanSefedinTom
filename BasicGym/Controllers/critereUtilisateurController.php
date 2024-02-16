<?php

require_once "Models/critereUtilisateursModele.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/CreateProgram") {
    CreateCritereUtilisateur($pdo);
    $template = "Views/base.php";
    require_once  "Views/base.php";
}