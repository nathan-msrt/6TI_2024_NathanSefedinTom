<?php

// Ajouter un avis
function ajouterAvisGeneral($pdo) {
    try {
        if (isset($_POST["btnEnvoiAvis"])) {
            $query = "INSERT INTO avisGeneral (utilisateurId, note, commentaire) VALUES (:utilisateurId, :note, :commentaire)";
            $ajouterAvis = $pdo->prepare($query);
            $ajouterAvis->execute([
                'utilisateurId' => $_SESSION['utilisateur']->utilisateurId,
                'note' => $_POST['note'],
                'commentaire' => $_POST['commentaire']
            ]);
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// Modifier un avis
function mettreAJourAvisGeneral($pdo) {
    try {
        if (isset($_POST["btnModifierAvis"])) {
            $query = "UPDATE avisGeneral SET note = :note, commentaire = :commentaire WHERE avisId = :avisId AND utilisateurId = :utilisateurId";
            $mettreAJourAvis = $pdo->prepare($query);
            $mettreAJourAvis->execute([
                'note' => $_POST['note'],
                'commentaire' => $_POST['commentaire'],
                'avisId' => $_POST['avisId'],
                'utilisateurId' => $_SESSION['utilisateur']->utilisateurId
            ]);
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// Supprimer un avis 
function supprimerAvisGeneral($pdo) {
    try {
        if (isset($_POST["btnSupprimerAvis"])) {
            $query = "DELETE FROM avisGeneral WHERE avisId = :avisId AND utilisateurId = :utilisateurId";
            $supprimerAvis = $pdo->prepare($query);
            $supprimerAvis->execute([
                'avisId' => $_POST['avisId'],
                'utilisateurId' => $_SESSION['utilisateur']->utilisateurId
            ]);
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// Afficher les avis
function afficherAvisGeneraux($pdo) {
    try {
        $query = "SELECT avisGeneral.*, utilisateur.utilisateurNom, utilisateur.utilisateurPrenom FROM avisGeneral JOIN utilisateur ON avisGeneral.utilisateurId = utilisateur.utilisateurId ORDER BY dateAvis DESC";
        $afficherAvis = $pdo->prepare($query);
        $afficherAvis->execute();
        $result = $afficherAvis->fetchAll(PDO::FETCH_ASSOC);        
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

?>
