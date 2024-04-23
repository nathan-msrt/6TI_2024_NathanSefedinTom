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
    <div >
        <div class="flex">
            <div class="marge">
                <h3 class="text-danger">modifier ton profil ?</h3>
                <a href="/modifyProfil" class="btn btn-secondary">Clique</a>
            </div>
            <div class="marge">
                <h3 class="text-danger">supprimer ton profil ?</h3>
                <a href="/deleteProfil" class="btn btn-secondary">Clique</a>
            </div>
        </div>
    </div>
    
    
</div>