

<div>
    <img src="img/avant-apres.jpg" alt="avant-apres.jpg">
</div>

<h1>Votre IMC</h1>
<div class="flex space-around">
    <div>
        <ol>
            <div>
                <li>Poid</li>
                <p><?= $_SESSION["utilisateur"]->utilisateurNom ?></p> <!--afficher une coordonnée dans la base de donnée-->
            </div>
            <div>
                <li>Taille</li>
                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurTaille ?></p>
            </div>
            <div>
                <li>Age</li>
                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurAge ?></p>
            </div>
            <div>
                <li>Sexe</li>
                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurSexe ?></p>
            </div>
            <div>
                <li>Photo de profil</li>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
        </ol>
    </div>