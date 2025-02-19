<?php
require("backend/connexionDB.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    require("include/head.php");
    ?>
</head>

<body>
    <header>
        <?php
        $sub_title = "Profil";
        require("include/header.php");
        ?>
    </header>
    <main>
        <?php
        require("include/main.php");
        ?>
    </main>
    <footer>
        <?php
        require("include/footer.php");
        ?>
    </footer>
    <?php
    require("assets/js/mobilemenu.js");
    ?>
</body>

</html>