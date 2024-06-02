<div class="divImgFond">
    <div class="flex space-around">
        <div class="divCompte">
            <h1>Votre page profil</h1>
            <ol>
                <div>
                    <li>Nom</li>
                    <p><?= $_SESSION["utilisateur"]->utilisateurNom ?></p>
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
               <?php if(isset($_SESSION['utilisateur'])) : ?>
                   <div>
                       <h3><a class="a3" href="/deleteProfil" class="btn btn-secondary">Supprimer</a></h3>
                   </div>
                   <div>
                       <h3><a class="a3" href="/Deconnexion" class="btn btn-secondary">Se deconnecter</a></h3>
                   </div>
                   <div>
                       <h3><a class="a3" href="/modifyProfil">Modifier</a></h3>
                   </div>
               <?php endif ?>
           </div>
        </div>
    </div>
    <div >
        <h2 class="h2Avis">Laisser un avis</h2>
        <form class="flex7" method="POST" action="/ajouterAvis">
            <label for="note">Note:</label>
            <select name="note" id="note">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <label for="commentaire">Commentaire:</label>
            <textarea name="commentaire" id="commentaire"></textarea>

            <button type="submit" name="btnEnvoiAvis">Envoyer</button>
        </form>
    </div>
</div>
