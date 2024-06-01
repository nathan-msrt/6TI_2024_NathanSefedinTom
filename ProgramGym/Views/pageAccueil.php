<?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
    <div class="divImgFond">
        <h1>Vos informations</h1>
        <?php if (!empty($_SESSION['critereutilisateur'])) : ?> <!-- Si les informations de l'utilisateur sont disponibles -->
            <div class="flex space-around divCritere">
                <div>
                    <ol>
                        <div>
                            <li>Poid</li>
                            <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?></p> 
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
                            <li>IMC</li>
                            <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurImc ?></p>
                        </div>
                    </ol>
                </div>
            </div>
        <?php else : ?> <!-- Si les informations de l'utilisateur ne sont pas disponibles -->
        <p>Veuillez d'abord générer votre programme.</p>
        <?php endif; ?>
    </div>
    <?php else : ?> <!-- Si l'utilisateur n'ai pas connecté -->
            <div class=" flex5 divImgFond2">
        <div class="divGaucheIntro flex6">
            <form action="" method="post">
                <div class="divLoginIntro">
                    <div class="espace"> <img src="img/Untitled.png" alt=""class="imgTitre"></div>
                    <div class="espace"><img src="img/LOGIN.png" alt="imgLogin" class="imgLogin"></div>
                    <div>
                        <a class="a2" href="connexion">Connecter</a>
                        <a class="a2" href="insciptionOrEditProfile">S'inscrire</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="divAvisIntro">
            <div class="divAvis">
                <H1 >Nos avis</H1>
                <div class="rating">
                    <div class="stars">
                        <div><img src="img/Union.png" alt=""></div>
                        <p>Ce site propose des programmes de sport personnalisés, efficaces et motivants. En peu de temps par session, il permet d'atteindre rapidement vos objectifs de forme physique avec des conseils d'experts.</p>
                        <div><img src="img/Untitledstar.png" alt=""></div>
                        <p>Ce site crée des programmes de sport sur mesure, motivants et adaptés à chacun. Les sessions sont courtes et efficaces, idéales pour atteindre rapidement vos objectifs de fitness.</p>
                        <input type="text" name="truc" value="<?php echo $donnees['machin']; ?>" />
                    </div>
                   <!-- <div>
                        <form action="">
                            <fieldset class="fieldsetAvis">
                                <legend class="legendAvis">Ajoute ton avis!</legend>
                            <div>
                                <label for="textarea"></label>
                                <textarea type="textarea" id="textarea"></textarea>
                            </div>
                            <div>
                                <button name="btnEnvoiAvis" type="submit" value="envoyer" class="buttonAvis">Envoyer Avis</button>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                    <div><a href=""></a></div>-->
                </div>
            </div>
        </div>

    </div>
<?php endif ?>
