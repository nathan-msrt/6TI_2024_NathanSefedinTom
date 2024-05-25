
<div class="divImgFond flex1">
<div class="flex1 divCreerProgram">
    <div>
        <form method="post" action="" class="flex formCreate">
            <fieldset class="fieldsetIMC">
                        <legend>Créer votre Programme</legend>
                        
                            <div>
                            <label for="gender">Sexe:</label >
                                <select id="sexe" name="sexe" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurSexe ?><?php endif ?>" required>
                                    <option value="male">Homme</option>
                                    <option value="female">Femme</option>
                                </select>
                            </div>

                        <div>
                        <label for="age">Âge:</label>
                        <input type="number" id="age" name="age" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurAge ?><?php endif ?>" required>
                        </div>

                    <div>
                        <label for="height">Taille (en cm):</label>
                        <input type="number" id="taille" name="taille" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurTaille ?><?php endif ?>" required>
                    </div>

                    <div>
                        <label for="weight">Poids (en kg):</label>
                        <input type="number" id="poid" name="poid" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?><?php endif ?>" required>
                    </div>

                    <div>
                        <button name="btnEnvoiImc" type="submit" value="envoyer">Calculer l'IMC</button>
                    </div>
            </fieldset>
        </form>
    </div>
</div>
</div>
