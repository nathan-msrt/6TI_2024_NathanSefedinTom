<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flex.css">

<div class="menu flex">
    <li><a href="/"><img src="img/img.png" width="100px"></a></li> 
    <li><a href="CreateProgram">Créer son programe</a></li>
    <li><a href="OurProgram">Nos programmes</a></li>
    <?php if(isset($_SESSION["user"])): ?>
            <a class="menu" class="menu" href="profil">Profil</a>
           <!-- <a class="menu-a" href="chat">Chat</a>-->
        <?php else : ?>
            <a class="menu-a" href="connexion">Connection</a>
        <?php endif ?>
</div>