
<div class="divImgFond flex1">
    <div class="divCompte">
        <H1 >Votre compte</H1>
    </div>
    <div class="divCritere">
        <h1>Vos critères</h1>
            <div class="">
                <form action="">
                    <fieldset>
                        <div>
                                        <ol>
                                        <?php
                                            if (isset($_SESSION["critereutilisateur"])) {
                                                $critere = $_SESSION["critereutilisateur"];}
                                                if (isset($_SESSION["critereutilisateur"])) {
                                                    $critere = $_SESSION["critereutilisateur"];
                                                    // Accéder aux informations de l'utilisateur
                                                    $poids = $critere->utilisateurPoid;
                                                    $taille = isset($critere->critereUtilisateurTaille) ? $critere->critereUtilisateurTaille : 'N/A';
                                                    $age = isset($critere->critereUtilisateurAge) ? $critere->critereUtilisateurAge : 'N/A';
                                                    $sexe = isset($critere->critereUtilisateurSexe) ? ($critere->critereUtilisateurSexe ? 'Homme' : 'Femme') : 'N/A';
                                                } else {
                                                    // La clé $_SESSION["critereutilisateur"] n'est pas définie
                                                    $poids = 'N/A';
                                                    $taille = 'N/A';
                                                    $age = 'N/A';
                                                    $sexe = 'N/A';
                                                }
                                            ?>
                                            <div>
                                                <li>Poids</li>
                                                <p><?= $poids ?></p>
                                            </div>
                                            <div>
                                                <li>Taille</li>
                                                <p><?= $taille ?></p>
                                            </div>
                                            <div>
                                                <li>Age</li>
                                                <p><?= $age ?></p>
                                            </div>
                                            <div>
                                                <li>Sexe</li>
                                                <p><?= $sexe ?></p>
                                            </div>
                                        </ol>
                        </div>
                    </fieldset>
                </form>            
            </div>
    </div>
</div>


