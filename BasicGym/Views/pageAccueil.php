

<div>
    <img src="img/avant-apres.jpg" alt="avant-apres.jpg">
</div>
<?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte-->
    <h1>Vos informations</h1>
        <div class="flex space-around">
            <div>
                <ol>
                    <div>
                        <li>Poid</li>
                        <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?></p> <!--afficher une coordonnée dans la base de donnée-->
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
                        <li>Sexe</li>
                        <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurSexe ?></p>
                    </div>
                </ol>
            </div>
        </div>

<?php endif ?>
