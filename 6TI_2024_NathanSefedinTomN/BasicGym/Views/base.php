<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgramGym</title>
    <link rel="stylesheet" href="css/flex.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="img/png" href="img/img.png"/>
</head>
<body>

    <?php if(isset($_SESSION["utilisateur"])) :?>
        <header> 
            <?php  require_once "Views/Components/navBar.php";?>
        </header>
        <?php endif ?>
    <main>
        <?php require_once $template;?>
    </main>
    <?php if(isset($_SESSION["utilisateur"])) :?>
    <footer>
        <?php require_once "Views/Components/footer.php"; ?>
    </footer>
    <?php endif ?>

    
</body>
</html>