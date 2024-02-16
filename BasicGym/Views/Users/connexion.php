            <form method="post" action="">
                <fieldset>
                    <legend>Se connecter</legend>
                    <div>
                        <label for="Email" class="form-label">Email</label>
                        <input type="Email" placeholder="Email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email" required>
                    </div>
                    <div>
                        <label for="Password" class="form-label">Mot de passe</label>
                        <input type="Password" placeholder="Password" class="form-control" id="Password" name="Password" required>
                    </div>
                    <div>
                        <button name="btnEnvoi" type="submit" value="envoyer">Envoyer</button>
                    </div>

                    <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
                        <div>
                            <h3 name="id" class="text-danger">supprimer ton profil ?</h3>
                            <a href="/deleteProfil" class="btn btn-secondary" name="id">Clique</a>
                        </div>
                    <?php endif ?>
                    
                    
                </fieldset>
            </form>