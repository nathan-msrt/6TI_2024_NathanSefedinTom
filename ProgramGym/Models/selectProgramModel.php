<?php

function selectProgram($pdo, $utilisateurId) {
    try {
        $query = "
            SELECT psu.programmeSportifId, ps.programmePoidDeCorpId, ps.programmeMusculationId, ps.programmeCardioId,
                   pc.corpPompe, pc.corpTraction, pc.corpSquat, pc.corpAbdos, pc.nbReps as pc_nbReps, pc.nbSeries as pc_nbSeries,
                   pm.muscuBras, pm.muscuJambes, pm.muscuMollets, pm.muscuDos, pm.muscuPecs, pm.muscuAbdos, pm.muscuFessiers, pm.nbReps as pm_nbReps, pm.nbSeries as pm_nbSeries,
                   pca.cardioEndurence, pca.cardioSprint, pca.cardioMarche, pca.cardioPente, pca.distance, pca.temps
            FROM ProgrammeSportif_utilisateur psu
            JOIN programmeSportif ps ON psu.programmeSportifId = ps.programmeSportifId
            LEFT JOIN programmePoidDeCorp pc ON ps.programmePoidDeCorpId = pc.programmePoidDeCorpId
            LEFT JOIN programmeMusculation pm ON ps.programmeMusculationId = pm.programmeMusculationId
            LEFT JOIN programmeCardio pca ON ps.programmeCardioId = pca.programmeCardioId
            WHERE psu.utilisateurId = :utilisateurId";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['utilisateurId' => $utilisateurId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}