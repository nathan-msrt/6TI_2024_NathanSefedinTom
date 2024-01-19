        <form method="post" action="">
            <fieldset>
                <legend><?php if(isset($_SESSION["utilisateur"])) : ?>Modifier<?php else : ?>Inscription<?php endif ?></legend>
                <div>
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" value="<?php if(isset($_SESSION["utilisateur"])) : ?><?= $_SESSION["utilisateur"]->utilisateurNom ?><?php endif ?>"> 
                </div>
                <div>
                    <label for="Prenom" class="form-label">Prenom</label>
                    <input type="text" placeholder="Prenom" class="form-control" id="Prenom" name="Prenom" value="<?php if(isset($_SESSION["utilisateur"])) : ?><?= $_SESSION["utilisateur"]->utilisateurPrenom ?><?php endif ?>"> 
                </div>
                <div>
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" placeholder="Email" class="form-control" id="Email" name="Email" value="<?php if(isset($_SESSION["utilisateur"])) : ?><?= $_SESSION["utilisateur"]->utilisateurEmail ?><?php endif ?>"> 
                </div>
                <div>
                    <label for="Login" class="form-label">Login</label>
                    <input type="text" placeholder="Login" class="form-control" id="login" name="login" value="<?php if(isset($_SESSION["utilisateur"])) : ?><?= $_SESSION["utilisateur"]->utilisateurMotDePasse ?><?php endif ?>">
                </div>
                <div>
                    <button name="btnEnvoi" type="submit" value="Envoyer"><?php if(isset($_SESSION["utilisateur"])) : ?>Modifier<?php else : ?>Envoyer<?php endif ?></button>
                </div>
            </fieldset>
        </form>