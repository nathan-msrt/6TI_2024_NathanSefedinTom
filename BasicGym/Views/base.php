<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgramGym</title>
    <!--<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flex.css">-->
</head>
<body>

    <header> 
        <?php require_once "Views/Components/navBar.php"; ?>
    </header>
    <main>
        <?php
            require_once $template;
        ?>
    </main>
    <flooter>
        <?php require_once "Views/Components/footer.php"; ?>
    </flooter>
</body>
</html>