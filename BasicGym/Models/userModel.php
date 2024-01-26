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

function chercherUser($pdo){
    try {
        $query = "select * from utilisateur where utilisateurPseudo=:utilisateurPseudo and utilisateurMotDePasse=:utilisateurMotDePasse";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'utilisateurPseudo' => $_POST['pseudo'],
            'utilisateurMotDePasse' => $_POST['mot_de_passe'],
        ]);
        $user=$chercheUser -> fetch();
        var_dump($_SESSION);
        var_dump($user);
        if ($user) {
            $_SESSION['user']=$user;
        }//else pour dirre qu'on a pas de pseudo ou mot de passe valide
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function UpdateUser($pdo)
{
    try {
        if (isset ($_POST["btnEnvoi"])) {
            $query = "update utilisateur set utilisateurNom=:utilisateurNom , utilisateurPrenom=:utilisateurPrenom, utilisateurPseudo=:utilisateurPseudo, utilisateurEmail=:utilisateurEmail,  utilisateurMotDePasse=:utilisateurMotDePasse where id=:id";
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'utilisateurNom'=> $_POST ['nom'],
                'utilisateurPrenom'=>$_POST ['prenom'],
                'utilisateurPseudo'=>$_POST ['pseudo'],
                'utilisateurMotDePasse'=>$_POST ['mot_de_passe'],
                'utilisateurEmail'=>$_POST ['email']
            ]);
        }
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}

function DeleteUser($pdo)
{
    try {
        $query = "delete from utilisateur where id=: id";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'id' => $_SESSION["user"] ->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}