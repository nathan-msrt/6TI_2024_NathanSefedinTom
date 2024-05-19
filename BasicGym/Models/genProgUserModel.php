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


function ChoixProg($pdo){
    $programmeUser1 = "";
    $programmeUser2 = "";

    $imc = $_SESSION["critereutilisateur"]->critereUtilisateurImc;
    $materielMusculation = $_SESSION["critereutilisateur"]->critereUtilisateurMaterielMusculation;
    $niveau = $_SESSION["critereutilisateur"]->critereUtilisateurNiveau;

    if ($imc < 18.5) {
        if ($materielMusculation == true) {
            $programmeUser2 = "programmemusculation_$niveau";
        } else {
            $programmeUser2 = "programmepoiddecorp_$niveau";
        }
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $programmeUser1 = "programmecardio_$niveau";
        if ($materielMusculation == true) {
            $programmeUser2 = "programmemusculation_$niveau";
        } else {
            $programmeUser2 = "programmepoiddecorp_$niveau";
        }
    } elseif ($imc >= 25 && $imc < 29.9) {
        $programmeUser1 = "programmecardio_$niveau";
    } else {
        echo "<p>Vous êtes en obésité. Consultez un professionnel de la santé.</p>";
        return;
    }

    try {
        if ($materielMusculation == true) {
            $query = "INSERT INTO programmeSportif (programmePoidDeCorpId, programmeMusculationId, programmeCardioId) 
                      VALUES (:programmePoidDeCorpId, :programmeMusculationId, :programmeCardioId)";
            $ajouteProgramme = $pdo->prepare($query);
            $ajouteProgramme->execute([
                'programmePoidDeCorpId' => $_POST[$programmeUser2] ?? null,
                'programmeMusculationId' => $_POST[$programmeUser2] ?? null,
                'programmeCardioId' => $_POST[$programmeUser1] ?? null,
            ]);
        } else {
            $query = "INSERT INTO programmeSportif (programmePoidDeCorpId, programmeMusculationId, programmeCardioId) 
                      VALUES (:programmePoidDeCorpId, :programmeMusculationId, :programmeCardioId)";
            $ajouteProgramme = $pdo->prepare($query);
            $ajouteProgramme->execute([
                'programmePoidDeCorpId' => $_POST[$programmeUser2] ?? null,
                'programmeCardioId' => $_POST[$programmeUser1] ?? null,
            ]);
        }

        $programmeSportifId = $pdo->lastInsertId();
        $query = "INSERT INTO ProgrammeSportif_utilisateur (utilisateurId, programmeSportifId) 
                  VALUES (:utilisateurId, :programmeSportifId)";
        $ajouteUserProgramme = $pdo->prepare($query);
        $ajouteUserProgramme->execute([
            'utilisateurId' => $_SESSION['utilisateur']->utilisateurId,
            'programmeSportifId' => $programmeSportifId,
        ]);

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function envoyerQuestionnaire($pdo) {
    $query = "SELECT utilisateurId, utilisateurEmail FROM Utilisateur";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($utilisateurs as $utilisateur) {
        $utilisateurId = $utilisateur['utilisateurId'];
        $email = $utilisateur['utilisateurEmail'];

        // Envoyer un email à l'utilisateur pour demander le retour sur la difficulté
        $subject = "Votre programme sportif hebdomadaire";
        $message = "Bonjour, trouvez-vous que votre programme sportif est trop facile ? Répondez par Oui ou Non.";
        $headers = "From: no-reply@example.com";

        // Une dois serveur assoicié utilisé par exmple PHPMAILER
        if ($email) {
            mail($email, $subject, $message, $headers);
        }
    }
}

function ajusterDifficulte($pdo, $utilisateurId, $reponse) { // à modifié pour avoir un message sur le site 
    if ($reponse === 'Oui') {
        // Récupérer le niveau actuel de difficulté
        $query = "SELECT niveauDifficulte FROM ProgrammeSportif_utilisateur WHERE utilisateurId = :utilisateurId";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['utilisateurId' => $utilisateurId]);
        $niveauDifficulte = $stmt->fetchColumn();

        // Augmenter la difficulté
        $nouveauNiveau = $niveauDifficulte + 1;

        // Mettre à jour la difficulté dans la base de données
        $queryUpdate = "UPDATE ProgrammeSportif_utilisateur SET niveauDifficulte = :nouveauNiveau WHERE utilisateurId = :utilisateurId";
        $stmtUpdate = $pdo->prepare($queryUpdate);
        $stmtUpdate->execute([
            'nouveauNiveau' => $nouveauNiveau,
            'utilisateurId' => $utilisateurId,
        ]);

        // Mettre à jour le programme sportif de l'utilisateur
        $query = "SELECT programmePoidDeCorpId, programmeMusculationId, programmeCardioId FROM programmeSportif 
                  WHERE programmeSportifNom LIKE CONCAT('% niveau ', :niveau, '%')";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['niveau' => $nouveauNiveau]);
        $nouveauProgramme = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($nouveauProgramme) {
            $queryUpdateProgramme = "UPDATE ProgrammeSportif_utilisateur SET programmePoidDeCorpId = :programmePoidDeCorpId,
                                       programmeMusculationId = :programmeMusculationId, programmeCardioId = :programmeCardioId
                                       WHERE utilisateurId = :utilisateurId";
            $stmtUpdateProgramme = $pdo->prepare($queryUpdateProgramme);
            $stmtUpdateProgramme->execute([
                'programmePoidDeCorpId' => $nouveauProgramme['programmePoidDeCorpId'],
                'programmeMusculationId' => $nouveauProgramme['programmeMusculationId'],
                'programmeCardioId' => $nouveauProgramme['programmeCardioId'],
                'utilisateurId' => $utilisateurId,
            ]);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['utilisateurId']) && isset($_POST['reponse'])) {
        ajusterDifficulte($pdo, $_POST['utilisateurId'], $_POST['reponse']);
    }
}
