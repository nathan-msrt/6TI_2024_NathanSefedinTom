<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flex.css">-->
</head>
<body>

    <header> 
        <?php require_once __DIR__ . "/Components/navBar.php"; ?>
    </header>
    <main>
        <?php
            require_once __DIR__ . "/../" . $template;
        ?>
    </main>
    <flooter>
        <?php require_once __DIR__ . "/Components/footer.php"; ?>
    </flooter>

    
</body>
</html>