<?php

function CreateCritereUtilisateur($pdo)
{
    try {
        if (isset ($_POST["btnEnvoi"])) {
            $query = "insert into critereutilisateur (critereUtilisateurPoid, critereUtilisateurTaille, critereUtilisateurAge, critereUtilisateurSexe) values ( :critereUtilisateurPoid, :critereUtilisateurTaille, :critereUtilisateurAge, :critereUtilisateurSexe)";
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'critereUtilisateurPoid'=> $_POST ['poid'],
                'critereUtilisateurTaille'=>$_POST ['taille'],
                'critereUtilisateurAge'=>$_POST ['age'],
                'critereUtilisateurSexe'=>$_POST ['sexe'],
            ]);
            $_SESSION['critereutilisateur']=$ajouteUser;
        }
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}

function selectLeCritere($pdo)
{ 
    try {
        
        $query = "select * from critereutilisateur where utilisateurId = :utilisateurId";
        
        $selectLeCritere = $pdo->prepare($query);
        $selectLeCritere->execute([
            'utilisateurId' => $_SESSION['utilisateurId']
        ]);
        $critere = $selectLeCritere->fetch();
        $_SESSION['critereutilisateur']=$critere;
        return $critere;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
