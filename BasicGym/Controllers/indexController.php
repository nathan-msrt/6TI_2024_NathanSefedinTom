<?php

require_once "Models/optionModel.php"; 

$uri = $_SERVER["REQUEST_URI"];

if ($uri == "/index.php"  ||  $uri == "/") {
    
}elseif ($uri == "/CreateProgram"){
    require_once "Views/Components/CreateProgram.php";
}
elseif ($uri == "/OurProgram"){
    require_once "Views/Components/OurProgram.php";
}