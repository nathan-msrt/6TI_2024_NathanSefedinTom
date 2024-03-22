<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flex.css">

<div class="menu flex">
    <li><a href="/"><img src="img/img.png" width="150px"></a></li> 
    <?php if(isset($_SESSION['utilisateur'])) : ?> <!--si l'utilisateur est connecte--> <li><a href="CreateProgram">Créer son programe</a></li> <?php endif ?>
    <li><a href="OurProgram">Nos programmes</a></li>
    <li><a href="connexion">Se connecter</a></li>
    <li><a href="insciptionOrEditProfile">S'inscrire</a></li>
</div>