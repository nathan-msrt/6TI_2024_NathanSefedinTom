<?php
function CreateUser($pdo)
{
    try {
        if (isset ($_POST["btnEnvoi"])) {
            $query = "insert into utilisateur (utilisateurNom, utilisateurPrenom, utilisateurEmail,  utilisateurMotDePasse) values ( :utilisateurNom, :utilisateurPrenom, :utilisateurEmail, :utilisateurMotDePasse)";
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'utilisateurNom'=> $_POST ['Nom'],
                'utilisateurPrenom'=>$_POST ['Prenom'],
                'utilisateurEmail'=>$_POST ['Email'],
                'utilisateurMotDePasse'=>$_POST ['Login'],
            ]);
        }
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}

function connectUser($pdo){
    try {
        $query = "select * from utilisateur where utilisateurEmail=:utilisateurEmail and utilisateurMotDePasse=:utilisateurMotDePasse";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'utilisateurEmail' => $_POST['Email'],
            'utilisateurMotDePasse' => $_POST['Password'],
        ]);
        $utilisateur=$chercheUser -> fetch();
        if ($utilisateur) {
            $_SESSION['utilisateur']=$utilisateur;
        }//else pour dirre qu'on a pas de pseudo ou mot de passe valide
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function DeleteUser($pdo)
{
    try {
        $query = "delete from utilisateur where utilisateurId =:utilisateurId";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'utilisateurId' => $_SESSION["utilisateur"] ->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function UpdateUser($pdo)
{
    try {
        if (isset ($_POST["btnEnvoi"])) {
            $query = "update utilisateur set utilisateurNom=:utilisateurNom , utilisateurPrenom=:utilisateurPrenom, utilisateurEmail=:utilisateurEmail,  utilisateurMotDePasse=:utilisateurMotDePasse where utilisateurId=:utilisateurId";
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'utilisateurNom'=> $_POST ['Nom'],
                'utilisateurPrenom'=>$_POST ['Prenom'],
                'utilisateurMotDePasse'=>$_POST ['Login'],
                'utilisateurEmail'=>$_POST ['Email'],
                'utilisateurId'=>$_SESSION['utilisateur']->utilisateurId
            ]);
        }
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}
function reloadSession($pdo)
{
    try {
        $query = "select * from utilisateur where utilisateurId = :utilisateurId";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'utilisateurId'=>$_SESSION['utilisateur']->utilisateurId
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['utilisateur']->utilisateurId;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectUser($pdo)
{
    
    try {
        
        $query = "select * from utilisateur where utilisateurId = :utilisateurId";
        
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            'utilisateurId' => $_SESSION['utilisateurId']
        ]);
        $user = $selectUser->fetch();
        return $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}