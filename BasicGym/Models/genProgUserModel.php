<?php 

function ImcProg(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $poids = $_SESSION["critereutilisateur"]->critereUtilisateurPoid;
        $taille = $_SESSION["critereutilisateur"]->critereUtilisateurTaille;
        
    }
    // Vérifier si les valeurs sont numériques et non vides
    if (is_numeric($poids) && is_numeric($taille) && $poids > 0 && $taille > 0) {
        // Calculer l'IMC
        $imc = $poids / ($taille * $taille);    

        // Afficher le résultat
        echo "<h2>Votre Indice de Masse Corporelle (IMC) est : " . number_format($imc, 2) . "</h2>";

        // Interpréter l'IMC
        if ($imc < 18.5) {
            echo "<p>Vous êtes en insuffisance pondérale.</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Votre poids est normal.</p>";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "<p>Vous êtes en surpoids.</p>";
        } else {
            echo "<p>Vous êtes en obésité. Consultez un professionnel de la santé.</p>";
        }
    } else {
        echo "<p>Erreur : Veuillez entrer des valeurs valides pour le poids et la taille.</p>";
    }

    function RecupIMC($pdo)
{
    try {
        
            $query = "UPDATE critereutilisateur SET critereUtilisateurImc = $imc";
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'utilisateurId'=>$_SESSION['utilisateur']->utilisateurId
            ]);
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}

}

function ChoixProg(){

    $imc = $_SESSION["critereutilisateur"]->critereUtilisateurImc;
    if ($imc < 18.5) {
            echo "<p>Vous êtes en insuffisance pondérale.</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Votre poids est normal.</p>";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "<p>Vous êtes en surpoids.</p>";
        } else {
            echo "<p>Vous êtes en obésité. Consultez un professionnel de la santé.</p>";
        }
    }

