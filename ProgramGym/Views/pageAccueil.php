<?php
require_once __DIR__ . '/../Controllers/avisUtilisateurController.php';

// Récupération des avis
$avis = afficherAvisGeneraux($pdo);
$avisRecents = array_slice($avis, 0, 3); // Ne prendre que les 3 avis les plus récents
?>

<?php if (isset($_SESSION['utilisateur'])) : ?>
    <div class="divImgFond">
        <h1>Vos informations</h1>
        <?php if (!empty($_SESSION['critereutilisateur'])) : ?>
            <div class="flex space-around divCritere">
                <div>
                    <ol>
                        <div>
                            <li>Poid</li>
                            <p><?= htmlspecialchars($_SESSION["critereutilisateur"]->critereUtilisateurPoid); ?></p>
                        </div>
                        <div>
                            <li>Taille</li>
                            <p><?= htmlspecialchars($_SESSION['critereutilisateur']->critereUtilisateurTaille); ?></p>
                        </div>
                        <div>
                            <li>Age</li>
                            <p><?= htmlspecialchars($_SESSION["critereutilisateur"]->critereUtilisateurAge); ?></p>
                        </div>
                        <div>
                            <li>IMC</li>
                            <p><?= htmlspecialchars($_SESSION["critereutilisateur"]->critereUtilisateurImc); ?></p>
                        </div>
                    </ol>
                </div>
            </div>
        <?php else : ?>
            <p>Veuillez d'abord générer votre programme.</p>
        <?php endif; ?>
    </div>
<?php else : ?>
    <div class="flex5 divImgFond2">
        <div class="divGaucheIntro flex6">
            <form action="" method="post">
                <div class="divLoginIntro">
                    <div class="espace"><img src="img/Untitled.png" alt="" class="imgTitre"></div>
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
                <h1>ProgramGym, où la révolution du fitness prend vie !</h1>
                <h2>Nos avis</h2>
                <div class="rating">
                    <div>
                        <?php if (!empty($avisRecents)) : ?>
                            <?php foreach ($avisRecents as $a) : ?>
                                <div class="avis">
                                    <h3><?= htmlspecialchars($a['utilisateurNom'] . ' ' . $a['utilisateurPrenom']); ?></h3>
                                    <p class="note">Note: <?= htmlspecialchars($a['note']); ?></p>
                                    <p class="commentaire">Commentaire: <?= nl2br(htmlspecialchars($a['commentaire'])); ?></p>
                                    <p class="date">Date: <?= htmlspecialchars($a['dateAvis']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Aucun avis pour le moment.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
