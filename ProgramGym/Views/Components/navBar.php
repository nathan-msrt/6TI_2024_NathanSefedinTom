

<div class="navbar li flex1">
    <?php if(isset($_SESSION['utilisateur']) && !isset($_SESSION['critereutilisateur'])) : ?><a class="a" href="CreateProgram">Créer son programe</a><?php endif ?>
    <?php if(isset($_SESSION['critereutilisateur'])) : ?> <a class="a" href="OurProgram">Mon programme</a> <?php endif ?>
    <?php if(isset($_SESSION['critereutilisateur'])) : ?> <a class="a" href="ModifProgram">Modifier Porgramme</a> <?php endif ?>
    
    <?php if(isset($_SESSION['utilisateur'])) : ?><a class="a" href="compte">Compte</a><?php endif ?>
</div>