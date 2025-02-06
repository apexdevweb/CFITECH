<?php
require("backend/connexionDB.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP training</title>
</head>

<body>
    <header>
        <?php
        require("include/header.php");
        ?>
    </header>
    <main>
        <?php
        require("main.php");
        ?>
    </main>
    <footer>
        <?php
        require("include/footer.php");
        ?>
    </footer>

</body>

</html>