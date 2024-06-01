<?php

function RecupValeurBdd($pdo)
{
    try {
        
        $query = "INSERT INTO critereutilisateur (critereUtilisateurPoid, critereUtilisateurTaille, critereUtilisateurAge, critereUtilisateurSexe, critereUtilisateurMaterielMusculation, utilisateurId, critereUtilisateurNiveau, critereUtilistaeurNbJour) 
                  VALUES (:critereUtilisateurPoid, :critereUtilisateurTaille, :critereUtilisateurAge, :critereUtilisateurSexe, :critereUtilisateurMaterielMusculation, :utilisateurId, :critereUtilisateurNiveau, :critereUtilistaeurNbJour)";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'critereUtilisateurPoid' => $_POST['poid'],
            'critereUtilisateurTaille' => $_POST['taille'],
            'critereUtilisateurAge' => $_POST['age'],
            'critereUtilisateurSexe' => $_POST['sexe'] == "male" ? 1 : 0,
            'critereUtilisateurMaterielMusculation' => $_POST['musculation'] == "oui" ? 1 : 0,
            'utilisateurId' => $_SESSION['utilisateur']->utilisateurId,
            'critereUtilisateurNiveau' => $_POST['niveau'],
            'critereUtilistaeurNbJour' => $_POST['jour']
        ]);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function selectLeCritereprUser($pdo)
{ 
    try {
        
        $query = "select * from critereutilisateur where utilisateurId = :utilisateurId";
        
        $selectLeCritere = $pdo->prepare($query);
        $selectLeCritere->execute([
            'utilisateurId' => $_SESSION['utilisateur']->utilisateurId
        ]);
        $critere = $selectLeCritere->fetch();
        $_SESSION['critereutilisateur']=$critere;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function DeleteCritereUser($pdo)
{
    try {
        $query = 'delete from critereutilisateur where utilisateurId = :utilisateurId';
        $delete2 = $pdo->prepare($query);
        $delete2->execute([
            'utilisateurId' => $_SESSION['utilisateur']->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

// modifier le critere User
function ModifierCritereUser($pdo){

    try {
        // Désactivation de SQL_SAFE_UPDATES pour permettre la mise à jour
        $pdo->exec("SET SQL_SAFE_UPDATES = 0;");
    
        // Préparation de la requête de mise à jour
        $query = "UPDATE critereutilisateur 
                  SET critereUtilisateurPoid = :critereUtilisateurPoid, 
                      critereUtilisateurTaille = :critereUtilisateurTaille, 
                      critereUtilisateurAge = :critereUtilisateurAge, 
                      critereUtilisateurSexe = :critereUtilisateurSexe, 
                      critereUtilisateurMaterielMusculation = :critereUtilisateurMaterielMusculation, 
                      critereUtilisateurNiveau = :critereUtilisateurNiveau, 
                      critereUtilistaeurNbJour = :critereUtilistaeurNbJour 
                  WHERE utilisateurId = :utilisateurId";
        
        $updateUser = $pdo->prepare($query);
        
        // Exécution de la requête avec les paramètres
        $updateUser->execute([
            'critereUtilisateurPoid' => $_POST['poid'],
            'critereUtilisateurTaille' => $_POST['taille'],
            'critereUtilisateurAge' => $_POST['age'],
            'critereUtilisateurSexe' => $_POST['sexe'] == "male" ? 1 : 0,
            'critereUtilisateurMaterielMusculation' => $_POST['musculation'] == "oui" ? 1 : 0,
            'utilisateurId' => $_SESSION['utilisateur']->utilisateurId,
            'critereUtilisateurNiveau' => $_POST['niveau'],
            'critereUtilistaeurNbJour' => $_POST['jour']
        ]);
        
        // Réactivation de SQL_SAFE_UPDATES
        $pdo->exec("SET SQL_SAFE_UPDATES = 1;");
        
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}