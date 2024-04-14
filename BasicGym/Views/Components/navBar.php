<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flex.css">

<div class="navBar li flex1 a">
    <img class="imgLogo" src="img/img.png" alt="imgLogo">
    <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte--> <li><a href="CreateProgram">COMPTE</a></li> <?php endif ?>
    <a href="OurProgram">ACCUEIL</a> <!-- changer les href des a-->
    <a href="connexion">CREER PROGRAMME</a>
    <a href="insciptionOrEditProfile">VOIR PROGRAMME</a>
</div>