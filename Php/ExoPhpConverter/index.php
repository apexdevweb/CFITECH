<?php
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $title = "Home";
    require("include/head.php");
    ?>

</head>

<body>
    <header>
        <?php
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
</body>

</html>