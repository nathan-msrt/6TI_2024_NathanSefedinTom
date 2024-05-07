<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flex.css">

<div class="menu flex">
    <li><a href="/"><img src="img/img.png" width="150px"></a></li> 
    <?php if(isset($_SESSION['utilisateur'])) : ?><li><a href="CreateProgram">Créer son programe</a></li><?php endif ?>
        <?php if(isset($_SESSION['utilisateur'])) : ?> <li><a href="OurProgram">Nos programmes</a></li> <?php endif ?>
    <li><a href="connexion">Se connecter</a></li>
    <li><a href="insciptionOrEditProfile">S'inscrire</a></li>
    <?php if(isset($_SESSION['utilisateur'])) : ?><li><a href="compte">Compte</a></li><?php endif ?>
<div class="navBar li flex1 ">
    <!--<img class="imgLogo" src="img/img.png" alt="imgLogo">-->
    <a class="a"  href="/">ACCUEIL</a> <!-- changer les href des a-->
    <a class="a"  href="CreateProgram">CREER PROGRAMME</a>
    <a class="a"  href="OurProgram">VOIR PROGRAMME</a>
    <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte--> <a class="a" href="CreateProgram">COMPTE</a> <?php endif ?>
</div>