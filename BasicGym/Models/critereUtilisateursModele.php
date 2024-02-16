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
        }
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}