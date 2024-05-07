<?php

function RecupValeurBdd($pdo)
{
    try {
        
            $query = "insert into critereutilisateur (critereUtilisateurPoid, critereUtilisateurTaille, critereUtilisateurAge, critereUtilisateurSexe, utilisateurId) values ( :critereUtilisateurPoid, :critereUtilisateurTaille, :critereUtilisateurAge, :critereUtilisateurSexe, :utilisateurId)";
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'critereUtilisateurPoid'=> $_POST ['poid'],
                'critereUtilisateurTaille'=>$_POST ['taille'],
                'critereUtilisateurAge'=>$_POST ['age'],
                'critereUtilisateurSexe'=>$_POST ['sexe'],
                'utilisateurId'=>$_SESSION['utilisateur']->utilisateurId
            ]);
    } catch (PDOException $e) {
        die($e -> getMessage());
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