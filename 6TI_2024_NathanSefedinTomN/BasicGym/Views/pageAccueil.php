
<div class="divImgFond flex1">
    <div class="divCompte">
        <H1 >Votre compte</H1>
    </div>
    <div class="divCritere">
        <h1>Vos critères</h1>
            <div >
                <form action="" class="formCreate">
                    <fieldset >
                                        <ol>
                                            <div>
                                                <li>Poid</li>
                                                <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?></p> <!--afficher une coordonnée dans la base de donnée-->
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
                                        </ol>
                    </fieldset>
                </form>            
            </div>
    </div>
</div>


