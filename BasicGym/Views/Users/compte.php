<h1>Votre page profil</h1>
<div class="flex space-around">
    <div>
        <ol>
            <div>
                <li>Nom</li>
                <p><?= $_SESSION["utilisateur"]->utilisateurNom ?></p> <!--afficher une coordonnée dans la base de donnée-->
            </div>
            <div>
                <li>Prénom</li>
                <p><?= $_SESSION["utilisateur"]->utilisateurPrenom ?></p>
            </div>
            <div>
                <li>Email</li>
                <p><?= $_SESSION["utilisateur"]->utilisateurEmail ?></p>
            </div>
            <div>
                <li>Password</li>
                <p><?= $_SESSION["utilisateur"]->utilisateurMotDePasse ?></p>
            </div>
        </ol>
    </div>
    <div class="flex">
        <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                <div>
                    <h3 name="btnEnvoi" class="text-danger"><a href="/deleteProfil" class="btn btn-secondary" name="id">supprimer ton profil ?</a></h3>
                </div>
            <?php endif ?>
            <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                <div>
                    <h3 name="btnEnvoi" class="text-danger"><a href="/Deconnexion" class="btn btn-secondary" name="id">Se deconnecter de ton profil ?</a></h3>
                </div>
            <?php endif ?>
            <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                <div>
                    <h3 name="btnEnvoi" class="text-danger"><a href="/modifyProfil">Modifier votre profil ?</a></h3>
                </div>
            <?php endif ?>  
    </div>   
</div>