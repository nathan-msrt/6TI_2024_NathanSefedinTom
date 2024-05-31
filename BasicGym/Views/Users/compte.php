<div class="divImgFond ">
    <div class="flex space-around">
        <div class="divCompte">
            <h1>Votre page profil</h1>
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
           <div class="flex1">
           <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                    <div>
                        <h3 name="btnEnvoi" class="text-danger"><a  class="a3" href="/deleteProfil" class="btn btn-secondary" name="id">Supprimer </a></h3>
                    </div>
                <?php endif ?>
                <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                    <div>
                        <h3 name="btnEnvoi" class="text-danger"><a  class="a3" href="/Deconnexion" class="btn btn-secondary" name="id">Se deconnecter </a></h3>
                    </div>
                <?php endif ?>
                <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                    <div>
                        <h3 name="btnEnvoi" class="text-danger"><a  class="a3" href="/modifyProfil">Modifier</a></h3>
                    </div>
                <?php endif ?>  
           </div>
        </div>
    </div>
</div>