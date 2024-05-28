<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flex.css">

<div class="menu flex">
    <?php if(isset($_SESSION['utilisateur']) && !isset($_SESSION['critereutilisateur'])) : ?><li><a href="CreateProgram">Créer son programe</a></li><?php endif ?>
    <?php if(isset($_SESSION['critereutilisateur'])) : ?> <li><a href="OurProgram">Mon programme</a></li> <?php endif ?>
    <?php if(isset($_SESSION['critereutilisateur'])) : ?> <li><a href="ModifProgram">Modifier Porgramme</a></li> <?php endif ?>
    <?php if(!isset($_SESSION['utilisateur'])) : ?> <li><a href="connexion">Se connecter</a></li> <?php endif ?>
    <?php if(!isset($_SESSION['utilisateur'])) : ?> <li><a href="insciptionOrEditProfile">S'inscrire</a></li> <?php endif ?>
    <?php if(isset($_SESSION['utilisateur'])) : ?><li><a href="compte">Compte</a></li><?php endif ?>
</div>