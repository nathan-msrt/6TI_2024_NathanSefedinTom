<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flex.css">

<div class="menu flex">
    <li><a href="/"><img src="img/img.png" width="150px"></a></li> 
    <?php if(isset($_SESSION['utilisateur'])) : ?><li><a href="CreateProgram">Créer son programe</a></li><?php endif ?>
    <?php if(isset($_SESSION['critereutilisateur'])) : ?> <li><a href="OurProgram">Nos programmes</a></li> <?php endif ?>
    <?php if(!isset($_SESSION['utilisateur'])) : ?> <li><a href="connexion">Se connecter</a></li> <?php endif ?>
    <?php if(!isset($_SESSION['utilisateur'])) : ?> <li><a href="insciptionOrEditProfile">S'inscrire</a></li> <?php endif ?>
    <?php if(isset($_SESSION['utilisateur'])) : ?><li><a href="compte">Compte</a></li><?php endif ?>
</div>