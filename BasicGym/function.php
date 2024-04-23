<?php 
function IMC(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $poids = $_POST["poids"];
        $taille = $_POST["taille"];
        
    }
    // Vérifier si les valeurs sont numériques et non vides
    if (is_numeric($poids) && is_numeric($taille) && $poids > 0 && $taille > 0) {
        // Calculer l'IMC
        $imc = $poids / ($taille * $taille);

        // Afficher le résultat
        echo "<h2>Votre Indice de Masse Corporelle (IMC) est : " . number_format($imc, 2) . "</h2>";

        // Interpréter l'IMC
        if ($imc < 18.5) {
            echo "<p>Vous êtes en insuffisance pondérale (fait mon programme frerot).</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Votre poids est normal.(ca va mais fait le quand meme)</p>";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "<p>Vous êtes en surpoids.</p>";
        } else {
            echo "<p>Vous êtes en obésité. Consultez un professionnel de la santé.</p>";
        }
    } else {
        echo "<p>Erreur : Veuillez entrer des valeurs valides pour le poids et la taille.</p>";
    }
}



?>