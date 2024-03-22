<div class="imageContainer">
    <img src="img/dos.png" alt="dos.jpg" width="100%">
    <h1 class="textOnImageTitre">PROGRAM GYM</h1>
</div>    
            
            
            <form method="post" action="" >
                <fieldset>
                    <legend>Se connecter</legend>
                    <div>
                        <label for="Login" class="form-label">Login</label>
                        <input type="Login" placeholder="Login" class="form-control" id="Login" aria-describedby="emailHelp" name="login" required>
                        <?php if(isset($messageError["login"])) : ?><small><?= $messageError["login"] ?></small><?php endif ?>
                    </div>
                    <div>
                        <label for="Password" class="form-label">Mot de passe</label>
                        <input type="Password" placeholder="Mot de passe" class="form-control" id="Password" name="Password" required>
                        <?php if(isset($messageError["password"])) : ?><small><?= $messageError["password"] ?></small><?php endif ?>
                    </div>
                    <div>
                        <button name="btnEnvoi" type="submit" >Envoyer</button>
                    </div>
                </fieldset>
            </form>
            <h3>Pas encore inscrit ?</h3>
            <a href="inscription">Clique</a>