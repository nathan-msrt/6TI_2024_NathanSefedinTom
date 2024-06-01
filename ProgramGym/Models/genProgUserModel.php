<?php 

// FONCTION qui permet de calculer l'IMC de l'utilisateur
function ImcProg($pdo){

    selectLeCritereprUser($pdo);
    // Récupérer les valeurs du formulaire
    $poids = $_SESSION["critereutilisateur"]->critereUtilisateurPoid;
    $taille = $_SESSION["critereutilisateur"]->critereUtilisateurTaille;
        
    
    $imc = $poids / ($taille/100 * $taille/100);

    try {
        $query = "SET SQL_SAFE_UPDATES = 0; UPDATE critereUtilisateur SET critereUtilisateurImc = :critereUtilisateurImc WHERE utilisateurId = :utilisateurId; SET SQL_SAFE_UPDATES = 1;";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'critereUtilisateurImc'=> $imc,
            'utilisateurId'=>$_SESSION['utilisateur']->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

// FONCTION qui permet de récupérer le NIVEAU de l'utilisateur (1-10)
function RecupNiveau($pdo){
    try {
        $query = "select * from critereutilisateur where critereUtilisateurNiveau=:critereUtilisateurNiveau";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'critereUtilisateurNiveau' => $_POST['Niveau'],
        ]);
        $utilisateur=$chercheUser -> fetch();
        if ($utilisateur) {
            $_SESSION['utilisateur']=$utilisateur;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

// FONCTION qui permet de générer le PROGRAMME de l'utilisateur en fonction de son niveau et de son IMC
function ChoixProg($pdo) {
    // Vérification des données de session
    if (!isset($_SESSION["critereutilisateur"]) || !isset($_SESSION['utilisateur'])) {
        die("Critères utilisateur ou utilisateur non définis dans la session.");
    }

    // Récupération des critères utilisateur depuis la session
    $imc = $_SESSION["critereutilisateur"]->critereUtilisateurImc;
    $materielMusculation = $_SESSION["critereutilisateur"]->critereUtilisateurMaterielMusculation;
    $niveau = $_SESSION["critereutilisateur"]->critereUtilisateurNiveau;
    
    // Initialisation des IDs de programme avec le niveau de l'utilisateur
    $programmeMusculationId = null;
    $programmePoidDeCorpId = null;
    $programmeCardioId = null;

    // Choix des programmes en fonction de l'IMC et du matériel de musculation
    if ($imc < 18.5) {
        $programmeCardioId = $niveau + 1;
        if ($materielMusculation) {
            $programmeMusculationId = $niveau;
        } else {
            $programmePoidDeCorpId = $niveau;
        }
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $programmeCardioId = 4 + $niveau;
        if ($materielMusculation) {
            $programmeMusculationId = $niveau + 2;
        } else {
            $programmePoidDeCorpId = $niveau + 2;
        }
    } elseif ($imc >= 25 && $imc < 31) {
        $programmeCardioId = $niveau;
        if ($materielMusculation) {
            $programmeMusculationId = $niveau + 1;
        } else {
            $programmePoidDeCorpId = $niveau + 1;
        }
    } else {
        echo "<p>Vous êtes en obésité. Consultez un professionnel de la santé.</p>";
        return;
    }

    try {
        // Insertion du programme sportif en base de données
        $query = "INSERT INTO programmeSportif (programmePoidDeCorpId, programmeMusculationId, programmeCardioId) 
                  VALUES (:programmePoidDeCorpId, :programmeMusculationId, :programmeCardioId)";
        $ajouteProgramme = $pdo->prepare($query);
        $ajouteProgramme->execute([
            'programmePoidDeCorpId' => $programmePoidDeCorpId,
            'programmeMusculationId' => $programmeMusculationId,
            'programmeCardioId' => $programmeCardioId,
        ]);

        // Récupération de l'ID du programme sportif inséré
        $programmeSportifId = $pdo->lastInsertId();

        // Association du programme sportif avec l'utilisateur
        $query = "INSERT INTO ProgrammeSportif_utilisateur (utilisateurId, programmeSportifId) 
                  VALUES (:utilisateurId, :programmeSportifId)";
        $ajouteUserProgramme = $pdo->prepare($query);
        $ajouteUserProgramme->execute([
            'utilisateurId' => $_SESSION['utilisateur']->utilisateurId,
            'programmeSportifId' => $programmeSportifId,
        ]);

    } catch (PDOException $e) {
        die("Erreur lors de la création du programme sportif : " . $e->getMessage());
    }
}



