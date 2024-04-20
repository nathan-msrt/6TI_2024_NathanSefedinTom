
<div class="navBar li flex1 a">
    <!--<img class="imgLogo" src="img/img.png" alt="imgLogo">-->
    <a class="a"  href="/">ACCUEIL</a> <!-- changer les href des a-->
    <a class="a"  href="CreateProgram">CREER PROGRAMME</a>
    <a class="a"  href="OurProgram">VOIR PROGRAMME</a>
    <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte--> <a class="a" href="CreateProgram">COMPTE</a> <?php endif ?>
</div>