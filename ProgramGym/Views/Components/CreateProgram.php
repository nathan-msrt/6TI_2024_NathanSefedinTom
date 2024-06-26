
<div class="divImgFond divCreateFond flex1">
<div class="flex1">
    <div class="divCreerProgram">
    <form method="post" action="" class="flex formCreate">
            <fieldset class="fieldsetInscription legendInscription">
                <h1><legend><?php if(isset($_SESSION['critereutilisateur'])) : ?>Modifier votre programme<?php else : ?>Créer votre Programme<?php endif ?></legend></h1>
                        
                <label for="sexe">Sexe</label>
                <select id="sexe" name="sexe" required>
                    <option value="male" <?php if(isset($_SESSION["critereutilisateur"]) && $_SESSION["critereutilisateur"]->critereUtilisateurSexe == 'male') echo 'selected'; ?>>Homme</option>
                    <option value="female" <?php if(isset($_SESSION["critereutilisateur"]) && $_SESSION["critereutilisateur"]->critereUtilisateurSexe == 'female') echo 'selected'; ?>>Femme</option>
                </select>

                <label for="age">Âge</label>
                <input type="number" id="age" name="age" value="<?php if(isset($_SESSION["critereutilisateur"])) echo $_SESSION["critereutilisateur"]->critereUtilisateurAge; ?>" required>

                <div>
                    <label for="taille">Taille (en cm)</label>
                    <input type="number" id="taille" name="taille" value="<?php if(isset($_SESSION["critereutilisateur"])) echo $_SESSION["critereutilisateur"]->critereUtilisateurTaille; ?>" required>
                </div>

                <div>
                    <label for="poid">Poids (en kg)</label>
                    <input type="number" id="poid" name="poid" value="<?php if(isset($_SESSION["critereutilisateur"])) echo $_SESSION["critereutilisateur"]->critereUtilisateurPoid; ?>" required>
                </div>

                <div>
                    <label for="niveau">Niveau (10 vous pratiquez du sport tout les jours, 1 vous n'avez plus fait de sport depuis plusieurs années)</label>
                    <select id="niveau" name="niveau" required>
                        <?php for ($i = 1; $i <= 10; $i++): ?> 
                            <option value="<?= $i ?>" <?php if(isset($_SESSION["critereutilisateur"]) && $_SESSION["critereutilisateur"]->critereUtilisateurNiveau == $i) echo 'selected'; ?>><?= $i ?></option>
                        <?php endfor; ?>
                    </select> 
                </div>
                
                <div>
                    <label for="jour">Nombre de jour disponible dans votre semaine pour faire du sport (entre 2 et 6)</label>
                    <select id="jour" name="jour" required>
                        <?php for ($i = 2; $i <= 6; $i++): ?> 
                            <option value="<?= $i ?>" <?php if(isset($_SESSION["critereutilisateur"]) && $_SESSION["critereutilisateur"]->critereUtilistaeurNbJour == $i) echo 'selected'; ?>><?= $i ?></option>
                        <?php endfor; ?>
                    </select> 
                </div>

                <label for="musculation">Avez-vous accès à une salle de sport ?</label>
                <select id="musculation" name="musculation" required>
                    <option value="oui" <?php if(isset($_SESSION["critereutilisateur"]) && $_SESSION["critereutilisateur"]->critereUtilisateurMaterielMusculation == 'oui') echo 'selected'; ?>>oui</option>
                    <option value="non" <?php if(isset($_SESSION["critereutilisateur"]) && $_SESSION["critereutilisateur"]->critereUtilisateurMaterielMusculation == 'non') echo 'selected'; ?>>non</option>
                </select>
                <div>
                <?php if(isset($_SESSION['critereutilisateur'])) : ?><button name="btnEnvoiImcModif" type="submit" value="envoyer">Modifier l'IMC</button><?php else : ?><button name="btnEnvoiImc" type="submit" value="envoyer">Calculer l'IMC</button><?php endif ?>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</div>