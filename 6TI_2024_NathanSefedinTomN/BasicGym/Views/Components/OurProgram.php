<div class="divImgFond">
    <div>
        <div class="flex">
            <div class="divCompte">
                <H1>Votre programme</H1>
            </div>
            <div class="divCritere">
                <h1>Vos critères</h1>
                <ol>
                            <div>
                                <li>Poid</li>
                                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?></p> <!--afficher une coordonnée dans la base de donnée-->
                            </div>
                            <div>
                                <li>Taille</li>
                                <p><?= $_SESSION['critereutilisateur']->critereUtilisateurTaille ?></p>
                            </div>
                            <div>
                                <li>Age</li>
                                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurAge ?></p>
                            </div>
                            <div>
                                <li>Sexe</li>
                                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurSexe ?></p>
                            </div>
                        </ol>
            </div>
        </div>
    </div>
</div>