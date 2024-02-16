<link rel="stylesheet" href="css/style.css">

<div class="flex1">
    <div>
        <form method="post" action="" class="flex formCreate">
            <fieldset>
                        <legend>Créer votre Programme</legend>
                        
                            <label for="gender">Sexe:</label >
                                <select id="sexe" name="sexe" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurSexe ?><?php endif ?>" required>
                                    <option value="male">Homme</option>
                                    <option value="female">Femme</option>
                                </select>

                        <label for="age">Âge:</label>
                        <input type="number" id="age" name="age" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurAge ?><?php endif ?>" required>

                    <div>
                        <label for="height">Taille (en cm):</label>
                        <input type="number" id="taille" name="taille" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurTaille ?><?php endif ?>" required>
                    </div>

                    <div>
                        <label for="weight">Poids (en kg):</label>
                        <input type="number" id="poid" name="poid" value="<?php if(isset($_SESSION["critereutilisateur"])) : ?><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?><?php endif ?>" required>
                    </div>

                    <div>
                        <button name="btnEnvoi" type="submit" value="envoyer">Calculer l'IMC</button>
                    </div>
            </fieldset>
        </form>
    </div>
    <div>
        <form method="post" action="" >
            <fieldset>
                <div class="flex etoile">
                    <img src="img/etoile.png" alt="etoile.png">
                    <img src="img/etoile.png" alt="etoile.png">
                    <img src="img/etoile.png" alt="etoile.png">
                    <img src="img/etoile.png" alt="etoile.png">
                    <img src="img/etoile.png" alt="etoile.png">
                </div>
                <div>
                    <p>coucou vous allez bien</p>
                </div>
            </fieldset>
        </form>
    </div>
</div>