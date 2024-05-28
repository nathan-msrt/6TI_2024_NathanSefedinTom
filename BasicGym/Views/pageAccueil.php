<?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
    <h1>Vos informations</h1>
    <?php if (!empty($_SESSION['critereutilisateur'])) : ?> <!-- Si les informations de l'utilisateur sont disponibles -->
        <div class="flex space-around">
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
<?php endif ?>
